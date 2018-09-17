<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
      return view('login');
    }

    public function postLogin(Request $request)
    {
      if (\Auth::attempt(['email'=> $request->email, 'password' => $request->password])) {
        return redirect()->back();
      }

      return redirect()->route('home');
    }

    public function getRegister()
    {
      return view('register');
    }

    public function postRegister(Request $request)
    {
      $this->validate($request,[
          'firstName' => 'required|min:4',
          'lastName'  => 'required|min:4',
          'email'     => 'required|email|unique:users',
          'password'  => 'required|min:6|confirmed' //field_confirmation
      ]);
      user::create([
          'firstName'       => $request->firstName,
          'lastName'        => $request->lastName,
          'institutionName' => $request->institutionName,
          'identityNumber'  => $request->identityNumber,
          'phoneNumber'     => $request->phoneNumber,
          'email'           => $request->email,
          'address'         => $request->address,
          'username'        => $request->username,
          'password'        => $request->password
      ]);


      return redirect()->back();
    }

    public function logout()
    {
      \Auth::logout();

      return redirect()->route('login');
    }
}
