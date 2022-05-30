<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderShipping;
use App\Models\OrderContent;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    public function show(){
       
        $product = [];
        $status = [];
        $user_data = OrderShipping::get();
        foreach($user_data as $data){

             array_push($product, (Order::find($data->order_id)));
             
        }
        
       
        return view('admin.orders.order_table', compact('user_data', 'product'));
    }
    public function view_products($id){
        $product_id =0;
        $orderShipping = OrderShipping::where('order_id', $id)->get();
        foreach($orderShipping as $orderShipping){
            $product_id = $orderShipping['id'];
        }
        $quantity = [];
        $order = OrderContent::where('order_id', $id)->get();
        
        $products_id =[];
        $products = [];
        foreach($order as $order){
             array_push($products_id, $order['product_id']);
             array_push($quantity, $order['quantity']);
        }


        foreach($products_id as $product){
            $data = Product::find($product);
            array_push($products, $data['name']);
       }
       return view('admin.orders.products_table', compact('products', 'quantity', 'product_id'));

    }
    
    public function status($id, Request $request){
        $orderShipping = OrderShipping::where('id', $id)->get();
        foreach($orderShipping as $orderShipping){
            $order = Order::find($orderShipping['order_id'])->update(['status' => request('status')]);
           
        }

       
        
        return redirect('admin/orders');
    }
}
