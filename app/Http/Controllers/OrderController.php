<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        if ($search) {
            $orders = Order::query()
                ->where('orderNumber', 'LIKE', "%{$search}%")
                ->orWhere('orderDate', 'LIKE', "%{$search}%")
                ->paginate(10);
        } else {
            $orders = Order::query()->paginate(10);
        }
        return view('product.index', ['orders' => $orders]);
    }
}
