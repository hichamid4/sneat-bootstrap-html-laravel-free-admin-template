<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Handyman;
use App\Models\HomeOwner;
use Illuminate\Http\Request;

class LoginBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }

  function loginForm() {
    if (session()->has('admin')) {
      return redirect()->route('back_end.works.services.index');
    }else if (session()->has('homeOwner') || session()->has('handyman')) {
      return redirect()->route('home.index');
    }else {
      return view('Front-end.userAuth.login');
    }
  }

  function login(Request $request) {
    /*  --------- DataBase  ---------  */
    // Admins
    $admins = Admin::all();
    // handymen 
    $handymen = Handyman::all();
    // Homeowners
    $homeOwners = HomeOwner::all();

    /*  --------- Form Data ---------  */
    $email = $request->email;
    $password = $request->password;
    
    /*  --------- Check User Type ---------  */
    // admin
    foreach ($admins as $admin) {
      if ($admin->email == $email && $admin->password == $password) {
        session()->put('admin' , $admin);
        return redirect()->route('back_end.works.services.index');
      }
    }

    // handymen
    foreach ($handymen as $handyman) {
      if ($handyman->email == $email && $handyman->password == $password) {
        session()->put('handyman' , $handyman);
        return session('handyman');
      }
    }

    // home owner
    foreach ($homeOwners as $homeOwner) {
      if ($homeOwner->email == $email && $homeOwner->password == $password) {
        session()->put('homeOwner' , $homeOwner);
        return session('homeOwner');
      }
    }
  }

}
