<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_product = Product::count();
        $total_order = Order::count();
        $total_completed_order = Order::where('delivery_status',1)->count();
        $total_pending_order = Order::where('delivery_status',0)->count();
        $revenue = Order::where('delivery_status', 1)->sum('price');
        $top_five_order = Order::orderBy('created_at', 'desc')->where('delivery_status',0)->limit(5)->get();
        return view('admin.dashboard', compact('total_product','total_order','revenue','total_completed_order','total_pending_order','top_five_order'));
    }
}
