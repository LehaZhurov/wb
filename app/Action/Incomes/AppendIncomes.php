<?php

namespace App\Action\Incomes;

use App\Models\Income;

class AppendIncomes
{

    public static function execute(array $data): bool
    {
        return Income::query()->insert($data);
    }

}