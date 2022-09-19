<?php

namespace App\Action\Sales;

use App\Models\Sale;
//Добовляет sales в таблицу без проверки на уникальность
class AppendSales
{

    public static function execute(array $data): bool
    {
        $result = Sale::query()->insert($data);
        return $result;
    }

}
