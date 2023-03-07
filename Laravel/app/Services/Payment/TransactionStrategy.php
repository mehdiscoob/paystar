<?php

namespace App\Services\Payment;

use App\Models\Transaction;

interface TransactionStrategy
{
    public function transaction(Transaction $transaction);
}
