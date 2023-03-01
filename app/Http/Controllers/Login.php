<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View as ViewView;

class Login extends Controller
{
    public function Index()
    {

        if (session("isloggedin")) {
            
            return redirect("/admin/dashboard");
        } else {
            return View('Login.Login');
        }
    }
    public function login(Request $request)
    {
        $islogin =   $this->validate($request, [
            'txt_username' => 'required|max:255|email',
            'txt_password' => 'required',
        ]);

        $isAuth = Auth::attempt(['email' => $islogin['txt_username'], 'password' => $islogin['txt_password']],true);
        if ($isAuth) {
            session(["isloggedin" => true]);
            return redirect("/admin/dashboard");
        } else {
            return redirect("/");
        }
        // echo $isAuth;
        // Attempt to authenticate the user...
    }
}
