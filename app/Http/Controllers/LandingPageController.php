<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;
use App\Models\Product;
use App\Models\Order;


class LandingPageController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('landingpage.index', compact('products'));
    }
    public function submit_order(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone_no' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'totalPrice' => 'required|numeric',
            'ordered_package' => 'required|string',
        ]);
        // Mail::to($validatedData['email'])->send(new OrderConfirmation($validatedData));
        // Mail::to('egbalajoy@gmail.com')->send(new OrderConfirmation($validatedData));

        $order = new Order();
        $order->name = $validatedData['name'];
        $order->phone = $validatedData['phone_no'];
        $order->email = $validatedData['email'];
        $order->address = $validatedData['address'];
        $order->price = $validatedData['totalPrice'];
        $order->package_ordered = $validatedData['ordered_package'];
        $order->save();
        return redirect()->back()->with('message', 'Order has been made!!!');

    }
}
