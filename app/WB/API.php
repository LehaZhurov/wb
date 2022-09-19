<?php

namespace App\WB;
use Illuminate\Support\Facades\Http;
class API
{

    const host = 'http://89.108.115.241:6969/api/'; //Хост расположения api
    const key = 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'; //Ключ для авторизации
    protected $yesterday;
    protected $today;

    public function __construct()
    {
        $this->time = date('h:i:s',time());
        $this->yesterday = date("Y-m-d", strtotime("yesterday"));
        $this->today = date("Y-m-d");
    }

    protected function request(string $path, $page = 1, $limit = 500): string
    {
        $url = self::host . $path . '&page=' . $page . '&limit=' . $limit . '&key=' . self::key;
        $response = Http::get($url)->body();
        return $response;
    }

    public function getSales(string $dateFrom = 'none', string $dateTo = 'none', int $page = 1, int $limit = 500): object
    {
        if ($dateFrom == 'none') {
            $dateFrom = $this->yesterday;
        }
        if ($dateTo == 'none') {
            $dateTo = $this->today;
        }
        $url = "sales?dateFrom={$dateFrom}&dateTo={$dateTo}";
        $response = $this->request($url, $page, $limit);
        $result = json_decode($response);
        return $result;
    }

    public function getAllSales(string $dateFrom = 'none', string $dateTo = 'none'): array
    {
        if ($dateFrom == 'none') {
            $dateFrom == $this->yesterday;
        }
        if ($dateTo = 'none') {
            $dateTo = $this->today;
        }
        $result = [];
        $page = 1;
        $request = $this->getSales($dateFrom, $dateTo, $page);
        $next = $request->links->next;
        $result = array_merge($result,$request->data);
        if ($next != null) {
            $page = $page + 1;
            $request = $this->getSales($dateFrom, $dateTo, $page);
            $result = array_merge($result,$request->data);
        }
        return $this->convert($result);
    }

    public function getOrders(string $dateFrom = 'none', string $dateTo = 'none', int $page = 1, int $limit = 500): object
    {
        if ($dateFrom == 'none') {
            $dateFrom = $this->yesterday;
        }
        if ($dateTo == 'none') {
            $dateTo = $this->today;
        }
        $url = "orders?dateFrom={$dateFrom}&dateTo={$dateTo}";
        $response = $this->request($url, $page, $limit);
        $result = json_decode($response);
        return $result;
    }

    public function getAllOrders(string $dateFrom = 'none', string $dateTo = 'none'): array
    {
        if ($dateFrom == 'none') {
            $dateFrom = $this->yesterday;
        }
        if ($dateTo == 'none') {
            $dateTo = $this->today;
        }
        $result = [];
        $page = 1;
        $request = $this->getOrders($dateFrom, $dateTo, $page);
        $next = $request->links->next;
        $result = array_merge($result,$request->data);
        if ($next != null) {
            $page = $page + 1;
            $request = $this->getOrders($dateFrom, $dateTo, $page);
            $result = array_merge($result,$request->data);
        }
        return $this->convert($result);
    }
    
    public function getStocks(int $page = 1, int $limit = 500): object
    {
        $dateTime = $this->today.' '.$this->time;
        $url = "stocks?dateFrom={$dateTime}";
        $response = $this->request($url, $page, $limit);
        $result = json_decode($response);
        return $result;
    }

    public function getAllStocks(string $dateFrom = 'none', string $dateTo = 'none'): array
    {
        if ($dateFrom == 'none') {
            $dateFrom = $this->yesterday;
        }
        if ($dateTo == 'none') {
            $dateTo = $this->today;
        }
        $result = [];
        $page = 1;
        $request = $this->getStocks($dateFrom, $dateTo, $page);
        $next = $request->links->next;
        $result = array_merge($result,$request->data);
        if ($next != null) {
            $page = $page + 1;
            $request = $this->getStocks($dateFrom, $dateTo, $page);
            $result = array_merge($result,$request->data);
        }
        return $this->convert($result);
    }

    public function getIncomes(string $dateFrom = 'none', string $dateTo = 'none', int $page = 1, int $limit = 500): object
    {

        if ($dateFrom == 'none') {
            $dateFrom = $this->yesterday;
        }
        if ($dateTo == 'none') {
            $dateTo = $this->today;
        }
        $url = "incomes?dateFrom={$dateFrom}&dateTo={$dateTo}";
        $response = $this->request($url, $page, $limit);
        $result = json_decode($response);
        return $result;
    }

    public function getAllIncomes(string $dateFrom = 'none', string $dateTo = 'none'): array
    {
        if ($dateFrom == 'none') {
            $dateFrom = $this->yesterday;
        }
        if ($dateTo == 'none') {
            $dateTo = $this->today;
        }
        $result = [];
        $page = 1;
        $request = $this->getIncomes($dateFrom, $dateTo, $page);
        $next = $request->links->next;
        $result = array_merge($result,$request->data);
        if ($next != null) {
            $page = $page + 1;
            $request = $this->getIncomes($dateFrom, $dateTo, $page);
            $result = array_merge($result,$request->data);
        }
        return $this->convert($result);
    }
    //Функиця преобразует объекты в ассоциативные массивы для вставки
    protected function convert(array $data){
        $result = [];
        foreach($data as $key => $item){
            $result[] = (array) $item;
        }
        return $result;
    }

    public static function new () {
        return new self();
    }

}
