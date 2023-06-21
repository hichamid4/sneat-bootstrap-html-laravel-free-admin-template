<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
	function index()  {
		return view('Front-end.userAuth.login');   
	}

	// function login(Request $request)  {
	// 	dd(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]));
	// 	if (Auth::guard('admin')->validate(['email' => 'admin@gmail.com', 'password' => '123456'])) {
	// 		dd('login success');
	// 	} else {
	// 		dd('login failed');
	// 	}
	// }


	function logout() {
		session()->forget('admin');
		return redirect()->route('loginForm');
	}
}
