<?php

namespace App\Http\Controllers;

use App\Action\Incomes\AppendIncomes;
use App\Action\Orders\AppendOrders;
use App\Action\Sales\AppendSales;
use App\WB\API;

class WBDataController extends Controller
{
    public function update()
    {

        $API = API::new ();
        $allSales = $API->getAllSales();
        $allOrders = $API->getAllOrders();
        $allIncomes = $API->getAllIncomes();
        $appendSalesResult = AppendSales::execute($allSales);
        $appendOrdersResult = AppendOrders::execute($allOrders);
        $appendIncomesResult = AppendIncomes::execute($allIncomes);
        if ($appendOrdersResult) {
            echo 'Заказы успешно сохранены<br>';
        }
        if ($appendSalesResult) {
            echo 'Скидки успешно сохранены<br>';
        }
        if ($appendIncomesResult) {
            echo 'Доходы успешно сохранены<br>';
        }

        // dd($allIncomes,$allOrders,$allSales);
    }
    //Просто лежат
    // $stocks = $API->getStocks();
    // $incomes = $API->getIncomes();
    // $orders = $API->getOrders();
    // $sales = $API->getSales();
    // $stocks = $API->getStocks();
    // dd($incomes->data[0],$orders->data[0],$sales->data[0]);
}
