<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\addLogo;
use App\Models\Admin;






class loginController extends Controller
{
    public function  getLogin(){

        $logo =  addLogo::All();
        return view('admin.auth.login', compact('logo'));
    }

    public function save(){

        $admin = new App\Models\Admin();
        $admin -> name ="omar mohamed";
        $admin -> email ="omar@gmail.com";
        $admin -> password = bcrypt("01033090076");
        $admin -> save();

    }

    public function login(LoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
