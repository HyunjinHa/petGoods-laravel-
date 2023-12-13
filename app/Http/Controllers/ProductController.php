<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 모든 게시물을 보여주는 메소드
    public function index()
    {
        $products = Product::all();

        return view('product', ['products' => $products]);
    }
}
