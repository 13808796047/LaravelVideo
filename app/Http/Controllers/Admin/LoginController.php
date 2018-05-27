<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class LoginController extends Controller

{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function loginForm()
    {

        return view('admin.login.login');
    }

    public function login(Request $request)
    {

        $status = Auth::guard('admin')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);
        if ($status) {
            return redirect('admin/index');
        }
        return redirect('admin/login')->with('error','用户名或密码错误');
    }

    public function index()
    {
        return '后台首页';
    }
}
