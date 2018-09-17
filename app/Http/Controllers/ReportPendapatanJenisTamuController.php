<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\usertype;
use App\user;
use App\reservation;
use App\detailreservation;

class ReportPendapatanJenisTamuController extends Controller
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

      $data = DB::table('usertype')
                     ->join('user', 'usertype.IdType', '=', 'user.IdType')
                     ->join('reservation', 'user.IdUser', '=', 'reservation.IdUser' )
                     ->join('detailreservation', 'reservation.IdReservation', '=', 'detailreservation.IdBooking' )
                     ->select('usertype.Type','user.FirstName','user.LastName','reservation.IdBooking', 'detailreservation.TotalPrice')
                     ->whereMonth('RegistrationDate', '=', date('5'))
                     ->get();

      return view('reportpendapatantamu',['data' => $data]);
  }
}
