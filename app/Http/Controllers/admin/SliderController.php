<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show(){
        $data = Slider::all();
        return view('slider.tableSlider', compact('data'));
    }
    public function index(){
        $categories = Category::all();
        return view('slider.add', compact('categories'));
    }
    public function store(Request $request)
    {


            $data = $this->validate(request(),[
                'title' => 'required',
                'name' => 'required'
            ],[],[]);
            if($request->hasFile('name')){
                $file = $request->file('name');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images' , $filename);

            }
        $news = Slider::create( [

                'title' => request('title'),
                'name' => $filename
            ]);
            return  redirect('admin/slider');


    }
    public function delete_slider($id){
       $product = Slider::find($id);
       $product->delete();
       session()->flash('delete_message', 'Slider has been deleted');
       return  redirect('admin/slider');
    }
    public function edit_slider($id){
        $slider = Slider::find($id);
        $categories = Category::all();
        return view('slider.edit', compact('slider', 'categories'));
    }
    public function update_slider(Request $request, $id){

        $filename = '';
        $slider = Slider::find($id);
        if($request->hasFile('name')){
            $file = $request->file('name');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images' , $filename);

        }

        $slider->title = request('title');

        $slider->name = $filename;
        $slider->save();
        session()->flash('edit_message', 'Slider has been edited');
        return  redirect('admin/slider');

    }
}


