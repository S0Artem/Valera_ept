<?php

namespace App\Http\Controllers;
use App\Models\Products;

class Controller
{
    public function showProducts()
    {

        $products = products::all();

        return view('products', ['products' => $products]); // Передаем массив продуктов в представление
    }
}