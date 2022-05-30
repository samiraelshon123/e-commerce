<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\models\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function show(){
        $data = Category::all();
        return view('admin.categories.simple', compact('data'));

    }
    public function index(){
        return view('admin.categories.add');
    }
    public function store(Request $request)
    {


        $data = $this->validate(request(),[
            'name' => 'required',
            'descreption' => 'required',
            'image' => 'required'
        ],[],[]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images' , $filename);

        }
    $news = Category::create( [
            'name' => request('name'),
            'descreption' => request('descreption'),
            'image' => $filename
        ]);
        return  redirect('admin/category');
    }
    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('delete_message', 'Category has been deleted');
        return  redirect('admin/category');
    }
    public function edit_category($id){

        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.categories.edit', compact('category', 'categories'));
    }
    public function update_category(Request $request, $id){
        $filename = '';
        $product = Category::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images' , $filename);

        }

        $product->name = request('name');
        $product->descreption = request('descreption');
        $product->image = $filename;
        $product->save();
        session()->flash('edit_message', 'Category has been edited');
        return  redirect('admin/category');

    }
}

