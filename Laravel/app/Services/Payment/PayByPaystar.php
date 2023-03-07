<?php

namespace App\Services\Payment;

use App\Models\Order;
use App\Models\Transaction;
use GuzzleHttp\Client;

class PayByPaystar implements TransactionStrategy
{
    private $order;

    /**
     * @param $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }


    public function transaction(Transaction $transaction)
    {
        $curl = curl_init();
        $order = $this->order;
//    curl_setopt_array($curl, array(
//        CURLOPT_URL => 'https://core.paystar.ir/api/pardakht/create',
//        CURLOPT_RETURNTRANSFER => true,
//        CURLOPT_ENCODING => '',
//        CURLOPT_MAXREDIRS => 10,
//        CURLOPT_TIMEOUT => 0,
//        CURLOPT_FOLLOWLOCATION => true,
//        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//        CURLOPT_CUSTOMREQUEST => 'POST',
//        CURLOPT_POSTFIELDS =>"{
//    'amount': $order->total_price,
//    'order_id':$order->id ,
//    'callback': 'https://site.ir/callback',
//}",
//        CURLOPT_HTTPHEADER => array(
//            'Authorization: Bearer 0yovdk2l6e143',
//            'Content-Type: application/json'
//        ),
//    ));
//    $response = curl_exec($curl);
//
//    curl_close($curl);
        $apiURL = 'https://core.paystar.ir/api/pardakht/create';
        $postInput = [
            "amount" => $order->total_price,
            "order_id" => $order->id,
            "callback" => "https://www.google.com/"
        ];
        $client = new Client();
        $response = $client->request('POST', $apiURL, ['body' => json_encode($postInput), 'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer 0yovdk2l6e143'
        ]]);

        return $response->getBody()->getContents();

    }
}
