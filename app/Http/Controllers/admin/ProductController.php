<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show(){
        $data = Product::all();
        return view('admin.products.product_table', compact('data'));
    }
    public function index(){
        $categories = Category::all();
        return view('admin.products.add', compact('categories'));
    }
    public function store(Request $request)
    {


            $data = $this->validate(request(),[
                'name' => 'required',
                'price' => 'required',
                'color' => 'required',
                'size' => 'required',
                'about' => 'required',
                'descreption' => 'required',
                'category_id' => 'required',
                'image' => 'required'
            ],[],[]);
            if($request->hasFile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images' , $filename);

            }
        $news = Product::create( [

                'name' => request('name'),
                'color' => request('color'),
                'size' => request('size'),
                'price' => request('price'),
                'about' => request('about'),
                'descreption' => request('descreption'),
                'category_id' => request('category_id'),
                'image' => $filename
            ]);
            return  redirect('admin/product');


    }
    public function delete_product($id){
       $product = Product::find($id);
       $product->delete();
       session()->flash('delete_message', 'Product has been deleted');
       return  redirect('admin/product');
    }
    public function edit_product($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }
    public function update_product(Request $request, $id){
        $filename = '';
        $product = Product::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images' , $filename);

        }

        $product->name = request('name');
        $product->color = request('color');
        $product->size = request('size');
        $product->price = request('price');
        $product->about = request('about');
        $product->descreption = request('descreption');
        $product->category_id = request('category_id');
        $product->image = $filename;
        $product->save();
        session()->flash('edit_message', 'Product has been edited');
        return  redirect('admin/product');

    }
}
