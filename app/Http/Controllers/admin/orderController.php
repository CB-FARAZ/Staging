<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class orderController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));

    }

    public function storeOrder(Request $request): \Illuminate\Http\RedirectResponse
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

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application

    {

        return view('admin.orderCreate');

    }

    public function destroyOrder(Request $request): \Illuminate\Http\RedirectResponse
    {
        Order::where('id',
            $request->id)->delete();

        Session::flash('message', 'Order deleted successfully');

        return redirect()->route('orders.index');
    }


    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $order = Order::find($id);
        return view('admin.editOrder', compact('order'));
    }


    public function updateOrder(Request $request): \Illuminate\Http\RedirectResponse
    {
        $attributes = $request->validate([
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

        $order = Order::where('id' , $request->id)->first();
        $order->client_name = $attributes['client-name'];
        $order->client_contact_no = $attributes['client-contact'];
        $order->customer_name = $attributes['customer-name'];
        $order->customer_contact_no = $attributes['customer-contact'];
        $order->pickup_location = $attributes['p-location'];
        $order->drop_off_location = $attributes['d-location'];
        $order->order_description = $attributes['order-description'];
        $order->packages_no = $attributes['package-count'];
        $order->items_amount = $attributes['package-price'];
        $order->mode_of_service_charge = $attributes['mode'];
        $order->status = $attributes['status'];
        $order->save();

        Session::flash('message', 'Successfully updated the order');
        return redirect()->route('orders.index');
    }

}
