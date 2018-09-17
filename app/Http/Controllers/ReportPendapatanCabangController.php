<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\branch;
use App\invoice;
use App\reservation;

class ReportPendapatanCabangController extends Controller
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

      $data = DB::table('branch')
                     ->join('reservation', 'branch.IdBranch', '=', 'reservation.IdBranch' )
                     ->join('detailreservation', 'reservation.IdReservation', '=', 'detailreservation.IdDetailBooking')
                     ->select('branch.Name',
                              DB::raw('count(detailreservation.IdDetailBooking) as countPemesanan'),
                              DB::raw('sum(detailreservation.TotalPrice) as total'))
                     ->whereYear('reservation.date', '2018')
                     ->get();

      // $total = DB::table('branch')
      //                ->join('reservation', 'branch.IdBranch', '=', 'reservation.IdBranch' )
      //                ->join('detailreservation', 'reservation.IdReservation', '=', 'detailreservation.IdDetailReservation')
      //                ->select('branch.Name',
      //                         DB::raw('count(detailreservation.IdDetailBooking) as countPemesanan'))
      //                ->get();

      return view('reportpendapatancabang',['data' => $data]);
  }
}
