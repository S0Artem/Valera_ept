<?php

namespace App\Http\Controllers;
use App\Models\Products;

class Controller
{
    public function showProducts()
    {

        $products = [
            ["name" => "Orange", "cost" => 50000000, "amount" => 27],
            ["name" => "Banana", "cost" => 120000000, "amount" => 17],
            ["name" => "Bread", "cost" => 70000000, "amount" => 0],
        ];

        return view('products', ['products' => $products]); // Передаем массив продуктов в представление
    }
}