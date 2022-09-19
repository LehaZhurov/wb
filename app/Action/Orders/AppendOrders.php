<?php

namespace App\Action\Orders;

use App\Models\Order;

class AppendOrders
{

    public static function execute(array $data): bool
    {
        return Order::query()->insert($data);
    }

}
