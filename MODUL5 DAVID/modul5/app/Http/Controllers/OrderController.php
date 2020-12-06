<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    //
    public function show(Product $product){
        return view('order', [
            'product'=>Product::all()
        ]);
    }

    public function create(Product $product){
        return view('TambahOrder', compact('product'));
    }

    public function history(Order $order, Product $product){
        return view('history', ['order'=>Order::all(), 'product'=>Product::all()]);
    }

    public function add(Request $request,Order $order){
// dd($request);

        $order->create([
			'product_id' => request('id'),
            'amount' => request('amount'),
            'buyer_name'=>request('buyer_name'),
            'buyer_contact'=>request('buyer_contact'),
            // 'updated_at'=> \Carbon\Carbon::now(),
            // 'created_at'=> \Carbon\Carbon::now(),
        ]); 
        
        return back()->with('success', 'success order');
    }
}
