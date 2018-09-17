<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\detailreservation;
use App\roomtype;

class detailReservationController extends Controller
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
        //$data = roomtype::all(); 
        $data =  DB::table('price')
                        ->join('roomtype', 'price.IdPrice', '=', 'roomType.IdPrice')
                        ->join('room', 'room.IdRoomType', '=', 'roomtype.IdRoomType')
                        ->join('roomstatus', 'roomstatus.IdRoom', '=', 'room.IdRoom')
                        ->select('roomtype.RoomFacility', 'price.PriceNominal')
                        ->get();

                        
        
        return view('reservasikamar',['data' => $data]);
    }
}
