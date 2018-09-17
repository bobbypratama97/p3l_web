<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\detailreservation;

class historyController extends Controller
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
      $data = detailreservation::all();
      return view('showhistory',['data' => $data]);

      // $data =  DB::table('history')
      //       ->join('reservation', 'history.IdBooking', '=', 'reservation.IdBooking')
      //       ->join('user', 'user.IdUser', '=', 'reservation.IdUser')
      //       ->select('user.IdUser','reservation.IdBooking', 'reservation.Date','history.IdHistory')
      //       // ->where('roomstatus.Status','Available')
      //       ->get();
      //
      // return view('showhistory',['data' => $data]);
  }
}
