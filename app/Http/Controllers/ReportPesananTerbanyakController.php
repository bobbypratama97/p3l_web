<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\reservation;
use Illuminate\Support\Carbon;

class ReportPesananTerbanyakController extends Controller
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

        $sysdate = Carbon::now();
        $getYear = $sysdate->year;
        $data = DB::table('user')
                       ->join('reservation','user.IdUser', '=', 'reservation.IdUser' )
                       ->join('detailreservation','reservation.IdReservation', '=', 'detailreservation.IdDetailBooking')
                       ->join('invoice','detailreservation.IdBooking', '=', 'invoice.IdBooking')
                       ->select('user.IdUser',
                                'user.FirstName',
                                'user.LastName',
                                'user.EmailAddress',
                                DB::raw('count(invoice.IdBooking) as count'),
                                DB::raw('count(detailreservation.IdDetailBooking) as countPemesanan'),
                                DB::raw('sum(invoice.TotalPayment) as total'))
                       ->whereMonth('reservation.Date', '=', date('5'))
                       // ->groupBy('user.IdUser')
                       ->orderBy('countPemesanan','DESC')
                       ->limit(5)
                       ->get();

        return view('reportpesananterbanyak',compact('getYear','data'));
  }
}
