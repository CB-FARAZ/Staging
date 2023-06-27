<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class orderController extends Controller
{
    public function index()
    {

        return view('admin.orders');

    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $validatedData = $request->validate([
            'client-name' => 'required',
            'client-contact' => 'required',
            'customer-name' => 'required',
            'customer-contact' => 'required',
            'p-location' => 'required',
            'd-location' => 'required',
            'order-description' => 'required',
            'package-count' => 'required',
            'package-price' => 'required',
            'mode' => 'required',
            'status' => 'required',
        ]);

        $order = new Order();
        $order->client_name = $validatedData['client-name'];
        $order->client_contact_no = $validatedData['client-contact'];
        $order->customer_name = $validatedData['customer-name'];
        $order->customer_contact_no = $validatedData['customer-contact'];
        $order->pickup_location = $validatedData['p-location'];
        $order->drop_off_location = $validatedData['d-location'];
        $order->order_description = $validatedData['order-description'];
        $order->packages_no = $validatedData['package-count'];
        $order->items_amount = $validatedData['package-price'];
        $order->mode_of_service_charge = $validatedData['mode'];
        $order->status = $validatedData['status'];
        $order->save();


        Session::flash('message', 'Successfully Created the User Profile.');
        return redirect()->route('orders.create');
    }


    public function create()

    {
        return view('admin.orderCreate');

    }




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
