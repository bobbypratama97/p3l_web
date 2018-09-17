<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\roomtype;
use App\roomstatus;
use App\price;
use App\room;
use App\database;


class roomavailablecontroller extends Controller
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
       /* select b.roomName, b.roomFacility, b.roomDetail, a.PriceNominal 
        from price a join roomtype b on a.IdPrice = b.IdPrice 
        join roomstatus c ON c.IdRoomType = b.IdRoomType
        where c.status='Available';;
        
        $data = mysql_query($sql);*/

        $data =  DB::table('price')
              ->join('roomtype', 'price.IdPrice', '=', 'roomtype.IdPrice')
              ->join('roomstatus', 'roomstatus.IdRoomType', '=', 'roomtype.IdRoomType')
              ->select('roomtype.roomName', 'roomtype.roomFacility', 'roomType.roomDetail','price.PriceNominal')
              ->where('roomstatus.Status','Available')
              ->get();
        
        return view('showroomavailable',['data' => $data]);
    }

}
