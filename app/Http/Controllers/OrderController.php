<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the data
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:30'],
            'order_type' => ['required', 'in:pickup,delivery'],
            'delivery_address' => ['nullable', 'string', 'max:500'],
            'product_id' => ['required', 'exists:products,id'],
            'quantity' => ['required', 'integer', 'min:1'],
            'special_note' => ['nullable', 'string', 'max:1000'],
        ]);

        // 2. Generate a random password for the new user
        $plainPassword = Str::random(8);

        // 3. Use a Database Transaction to save everything safely
        $result = DB::transaction(function () use ($validated, $plainPassword) {
            
            // Create User
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($plainPassword),
                'role' => 'customer',
            ]);

            // Calculate Total
            $product = Product::find($validated['product_id']);
            $total = $product->price * $validated['quantity'];

            // Create Order
            $order = Order::create([
                'user_id' => $user->id,
                'order_type' => $validated['order_type'],
                'delivery_address' => $validated['order_type'] === 'delivery' ? $validated['delivery_address'] : null,
                'special_note' => $validated['special_note'] ?? null,
                'total_amount' => $total,
                'status' => 'pending',
            ]);

            // Create Order Item
            $order->items()->create([
                'product_id' => $product->id,
                'quantity' => $validated['quantity'],
                'unit_price' => $product->price,
            ]);

            return ['user' => $user, 'order' => $order];
        });

      return view('order-success', [
    'user' => $result['user'],
    'order' => $result['order'],
    'plainPassword' => $plainPassword,
]);  
    }
}