<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\models\Coupon;
class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show(){
        $data = Coupon::all();
        return view('admin.coupons.tableCoupon', compact('data'));

    }
    public function index(){
        return view('admin.coupons.add');
    }
    public function store(Request $request)
    {


        $data = $this->validate(request(),[
            'code_name' => 'required',
            'discount' => 'required',
            
        ],[],[]);
        
    $news = Coupon::create( [
            'code_name' => request('code_name'),
            'discount' => request('discount'),
           
        ]);
        return  redirect('admin/coupon');
    }
    public function delete_coupon($id){
        $coupon = Coupon::find($id);
        $coupon->delete();
        session()->flash('delete_message', 'Coupon has been deleted');
        return  redirect('admin/coupon');
    }
    public function edit_coupon($id){

        $coupon = Coupon::find($id);
        $coupons = Coupon::all();
        return view('admin.coupons.edit', compact('coupon', 'coupons'));
    }
    public function update_coupon(Request $request, $id){
        
        $coupon = Coupon::find($id);
        
        $coupon->code_name = request('code_name');
        $coupon->discount = request('discount');
        $coupon->save();
        session()->flash('edit_message', 'Coupon has been edited');
        return  redirect('admin/coupon');

    }
}
