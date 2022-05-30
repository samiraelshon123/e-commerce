<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class RegisterController extends Controller
{
    public function register(){
        return view('user.auth.register');
    }
    public function registerUser(Request $request){
        $data = $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',


        ],[],[]);
        $news = User::create( [

            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),

        ]);
        return redirect('user');
    }
}
