<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function insertProduct(Request $req){
        $validate = $req->validate([
            'product' => 'required|string|max:200',
            'quantity' => 'required|numeric|min:0',
            'price' => 'required|integer|min:1',
        ]);
        $product = Product::create($validate);

        return response()->json([
            'product' => $product
        ], 201);
    }

    public function getProducts(){
        $products = Product::All();
        $total=0;
        foreach($products as $product){
            $totalPrice =$product->price * $product->quantity;
            $total = $total + $totalPrice;
        }
        $overAllTotal = $total;

        return response()->json([
            'products' => $products,
            'overAllTotal' => $overAllTotal
        ]);
    }
}
