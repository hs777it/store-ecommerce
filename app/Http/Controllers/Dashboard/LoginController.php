<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('dashboard.auth.login');
    }

    //public function postLogin(Request $request){
    public function postLogin(AdminLoginRequest $request){

        //validation
        //check, store, update
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"),
                                                    'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
       // with: add key(error) in session
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
        // return $request;
    }
}
