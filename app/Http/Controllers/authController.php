<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Http\Requests\registrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function getLogin()
    {
        return view('frontend.auth.login');
    }

    public function getRegistration()
    {
        return view('frontend.auth.registration');
    }

    public function postRegistration(registrationRequest $request)
    {
        $request['password']    = bcrypt($request->password);
        $users = new User();
        $users->name_lastname   = $request->name_lastname;
        $users->email           = $request->email;
        $users->password        = $request->password;
        $users->save();

        auth()->login($users);

        return redirect('homepage');
    }

    public function postLogin(loginRequest $request)
    {
        $request->flash();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('homepage');
        }
        else
        {
            return view('frontend.auth.login')->with('xeta','Email və ya Şifrə yanlışdır');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
