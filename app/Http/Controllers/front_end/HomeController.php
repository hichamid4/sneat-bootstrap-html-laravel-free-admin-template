<?php

namespace App\Http\Controllers\front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	function index()
	{
		return view('Front-end.home');
	}
}
