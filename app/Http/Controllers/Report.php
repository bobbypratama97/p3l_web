<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\reservation;

class Report extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  function index(){
     /* SELECT b.IdUser, b.FirstName, b.LastName, a.date FROM reservation a JOIN user b ON a.IdUser = b.IdUser
        where MONTH (date) = 1*/

      $data = DB::table('user')
                     ->select('user.IdUser','user.RegistrationDate','user.FirstName','user.LastName','user.EmailAddress')
                     ->whereMonth('RegistrationDate', '=', date('5'))
                     ->get();

      return view('showreportnewuser',['data' => $data]);
  }
}
