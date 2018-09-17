<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\reservation;
use App\detailreservation;
use App\specialrequest;
use App\paidservice;

class recieptController extends Controller
{
     public function show(){
         return view('lihattandaterima');
     }

     public function index($idbooking){
      /*  $data =  DB::table('reservation')
        ->select('reservation.IdBooking')
        ->where('reservation.IdBooking')
        ->get();*/
        
        /*select b.IdBooking, a.FirstName, a.Address, c.CheckInDate, c.CheckOutDate, c.AdultQuantity, c.KidsQuantity, c.RoomName,
        c.RoomQuantity,c.UnitPrice,c.TotalPrice,e.PaidServiceName, d.Quantity 

        from 

        user a join reservation b on a.IdUser=b.IdUser 
        join detailreservation c on c.IdBooking = b.IdReservation
        join specialrequest d on c.IdDetailBooking = d.IdDetailBooking
        join paidservice e on d.IdPaidService = e.IdPaidService

        WHERE b.IdBooking = 'P180118-001'*/
      
         $data =  
         
         DB::table('user')
        ->join('reservation', 'user.IdUser', '=', 'reservation.IdUser')
        ->join('detailreservation', 'detailreservation.IdBooking', '=', 'reservation.IdReservation')
        ->join('specialrequest','detailreservation.IdDetailBooking','=','specialrequest.IdDetailBooking')
        ->join('paidservice','specialrequest.IdPaidService','=','paidservice.IdPaidService')
        
        ->select('reservation.IdBooking','user.FirstName','user.Address','detailreservation.CheckInDate','detailreservation.CheckOutDate',
        'detailreservation.AdultQuantity','detailreservation.KidsQuantity','detailreservation.RoomName',
        'detailreservation.RoomQuantity','detailreservation.UnitPrice','detailreservation.TotalPrice',
        'paidservice.PaidServiceName', 'specialrequest.Quantity'
        )
        ->where('reservation.IdBooking','=','$idbooking')
        ->get();
 
        return view('lihattandaterima2',['data' => $data]);
     }


}
