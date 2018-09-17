<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class DataTamuController extends Controller
{
  public function getDataTamu()
  {
    return view('dataTamu');
  }

  public function postdataTamu(Request $request)
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
        'identityNumber'  => $request->identityNumber,
        'phoneNumber'     => $request->phoneNumber,
        'email'           => $request->email,
        'address'         => $request->address
    ]);

    return view('dataTamu');

    // return redirect()->back();
  }
}
