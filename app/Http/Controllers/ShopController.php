<?php
namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(Request $request)
    {
        $name = $request->input('id');
        $products = products::all();
        
        
        return view('shope', ['name' => $name], ['products' => $products]);
    }
}