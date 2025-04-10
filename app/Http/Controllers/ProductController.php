<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        if ($search) {
            $products = Product::query()
                ->where('productCode', 'LIKE', "%{$search}%")
                ->orWhere('productName', 'LIKE', "%{$search}%")
                ->paginate(10);
        } else {
            $products = Product::query()->paginate(10);
        }
        return view('product.index', ['products' => $products]);
    }
}

