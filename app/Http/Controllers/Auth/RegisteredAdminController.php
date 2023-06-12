<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Doctrine\DBAL\Schema\View;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredAdminController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.AdminRegister');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $admin = Admin::create([
        //     'username' => $request->username,
        //     'fullName' => $request->name,
        //     'password' => $request->password,
        //     'email' => $request->email,
        // ]);

        $admin = new Admin();
        $admin->username = $request->username;
        $admin->fullName = $request->name;
        $admin->password = Hash::make($request->password);
        $admin->email = $request->email;
        $admin->save();

        event(new Registered($admin));

        Auth::login($admin);

        return redirect(RouteServiceProvider::HOME);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended(route('dashboard-analytics'));
        }

        // Authentication failed
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('passager')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
