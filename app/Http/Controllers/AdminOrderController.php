<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->latest()->get();
        return view('admin-dashboard', compact('orders'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate(['status' => 'required']);
        $order->update(['status' => $request->status]);
        return back()->with('success', 'Order status updated!');
    }
}