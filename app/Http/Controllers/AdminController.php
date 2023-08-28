<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function orders_view(){
        $orders = Order::orderBy('delivery_status','asc')->paginate(5);
        return view('admin.orders', compact('orders'));
    }
    public function complete_order($id){
        $order = Order::find($id);
        $order->delivery_status = 1;
        $order->save();
        return redirect()->back()->with('message',"Order Completed");

    }

    //PRODUCT
    public function products_view(){
        return view('admin.add_product');
    }
    public function manage_product_view(){
        $products = Product::paginate(5);
        return view('admin.manage_product', compact('products'));
    }
    public function add_a_product(Request $request){
        $request->validate([
            'package_name' => 'required',
            'package_content' => 'required',
            'package_price' => 'required|numeric',
            'package_image' => 'required|file|mimes:jpg,jpeg,png',
        ]);

        $product = new Product();
        $product->package_name = $request->package_name;
        $product->package_content = $request->package_content;
        $product->price = $request->package_price;
        if ($request->hasFile('package_image')) {
            $file = $request->file('package_image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/product_images'), $filename);
            $product->package_image = $filename;
        }
        $product->save();

        return redirect()->back()->with('message','Package Added!!!');
    }
    public function edit_a_product_view($id){
        $product = Product::find($id);
        return view('admin.edit_product', compact('product'));
    }
    public function edit_a_product(Request $request, $id){
        $request->validate([
            'package_image' => 'file|mimes:jpg,jpeg,png',
        ]);
        $product = Product::find($id);
        $product->package_name = $request->package_name;
        $product->package_content = $request->package_content;
        $product->price = $request->package_price;
        if ($request->hasFile('package_image')) {
            $file = $request->file('package_image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/product_images'), $filename);
    
            $product->package_image = $filename;
            //$product->package_image = $filename;
        }
        $product->save();

        return redirect()->route('manage_product_view');
        //return redirect()->route('manage_product_view')->with('message', 'Product Updated');
    }
    public function delete_a_product($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted');
    }


}
