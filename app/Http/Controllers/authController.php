<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class authController extends Controller
{
    function login()
    {
        return view('login');
    }

    function submitLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            Alert::success('Success', 'Login Successful');
            return redirect()->intended('/');
        } else {
            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            auth()->login($user);
            Alert::success('Success', 'Account Created and Logged In');
            return redirect()->intended('/');
        }
    }

    function logout()
    {
        auth()->logout();
        Alert::success('Success', 'Logged Out Successfully');
        return redirect()->route('login');
    }
}
