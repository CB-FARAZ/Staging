<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class orderController extends Controller
{
    public function index()
    {

        return view('admin.orders');

    }


//    public function show($id)
//    {
//        $order = Order::find($id);
//        return view('admin.orders.show', compact('order'));
//    }
//
//    public function store()
//    {
//        $order = Order::create(request()->all());
//        return redirect()->route('admin.orders.index');
//    }
//
//    public function edit($id)
//    {
//        $order = Order::find($id);
//        return view('admin.orders.edit', compact('order'));
//    }
//
//    public function update($id)
//    {
//        $order = Order::find($id);
//        $order->update(request()->all());
//        return redirect()->route('admin.orders.index');
//    }
//
//    public function destroy($id)
//    {
//        $order = Order::find($id);
//        $order->delete();
//        return redirect()->route('admin.orders.index');
//    }


}
