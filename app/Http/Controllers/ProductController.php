<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
    {
        $products = Product::all();
        $totaleVoorraad = $products->sum('aantal');
        $totaleProducten = $products->count();

        return view('admin.index', [
            'products' => $products,
            'totaleVoorraad' => $totaleVoorraad,
            'totaleProducten' => $totaleProducten,
        ]);
    }
}
