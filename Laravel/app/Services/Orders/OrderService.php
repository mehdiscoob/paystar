<?php

namespace App\Services\Orders;

use App\Models\Order;
use App\Models\Transaction;
use App\Services\Payment\PayByPaystar;
use App\Traits\Accessors;
use Illuminate\Support\Facades\DB;

class OrderService
{
    use Accessors;

    /**
     * create product and redirect to Payment
     * @return Order
     */
    public function createOrder()
    {
        $data = $this->getData();
        DB::beginTransaction();
        try {
            $data['code']=random_int(1,10000);
            $order = Order::create($data);
            $transaction=new Transaction();
            $payment = new PayByPaystar($order);
            $payment= $payment->transaction($transaction);
            dd(json_decode($payment));
            DB::commit();
            return response()->json(["data" => $data,"message" => "success"]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['data' => 'Exception', 'message' => $exception->getMessage()]);
        }

    }

}
