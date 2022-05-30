<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show(){
        $data = Contact::all();
        return view('admin.contact.contact_table', compact('data'));
    }
    public function index(){

        return view('admin.contact.add');
    }
    public function store(Request $request)
    {


            $data = $this->validate(request(),[
                'address' => 'required',
                'email' => 'required',
                'phone' => 'required',

            ],[],[]);

        $news = Contact::create( [

                'address' => request('address'),
                'email' => request('email'),
                'phone' => request('phone'),

            ]);
            return  redirect('admin/contact');


    }
    public function delete_contact($id){
       $contact = Contact::find($id);
       $contact->delete();
       session()->flash('delete_message', 'Contact has been deleted');
       return  redirect('admin/contact');
    }
    public function edit_contact($id){
        $contact = Contact::find($id);
        $categories = Category::all();
        return view('admin.contact.edit', compact('contact', 'categories'));
    }
    public function update_contact(Request $request, $id){

        $contact = Contact::find($id);


        $contact->address = request('address');
        $contact->email = request('email');
        $contact->phone = request('phone');

        $contact->save();
        session()->flash('edit_message', 'Contact has been edited');
        return  redirect('admin/contact');

    }
}
