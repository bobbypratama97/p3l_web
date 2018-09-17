<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\reservation;
use App\detailreservation;

class ReportJenisKamarController extends Controller
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

      $data = DB::table('user')
                     ->join('reservation', 'user.IdUser', '=', 'reservation.IdUser')
                     ->join('detailreservation', 'reservation.IdReservation', '=', 'detailreservation.IdBooking' )
                     ->select('user.IdUser','user.FirstName','user.LastName','reservation.IdBooking', 'detailreservation.RoomName')
                     ->where('detailreservation.RoomName', 'Double Deluxe')
                     ->get();

      return view('reportjeniskamar',['data' => $data]);
  }
}
