<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\reservation;
use App\room;
use App\roomtype;
use App\detailreservation;
use App\branch;
use App\paidservice;
use App\season;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class ReservationController extends Controller
{
  public function index (Request $req){
    if($req->search == ""){
      $reservasis = reservation::paginate(5);
      return view('/', compact('reservasis'))
      ->with('user', user::all())
      ->with('detailreservation', detailreservation::all())
      ->with('room', room::all())
      ->with('roomtype', roomtype::all())
      ->with('branch', branch::all());
    }else{
      $reservasis = reservation::where('IdBooking','LIKE','%' .$req->search. '%')
          ->paginate(3);
      $reservasis->appends($req->only('search'));
      return view ('/', compact('reservasis'))
      ->with('user', user::all())
      ->with('detailreservation', detailreservation::all())
      ->with('room', room::all())
      ->with('roomtype', roomtype::all())
      ->with('branch', branch::all());
    }
  }

  public function tandareservation(Request $req){
    $reservasis = reservation::where('UserStatus','Sudah Check In')
                  ->latest()->orderBy('IdReservation')->paginate(1);

                  return view('/', compact('reservasis'))
                  ->with('user', user::all())
                  ->with('detailreservation', detailreservation::all())
                  ->with('room', room::all())
                  ->with('roomtype', roomtype::all())
                  ->with('branch', branch::all());
  }

  public function create()
  {
    $reservasis         = reservation::all();
    $user               = user::all();
    $detailreservation  = detailreservation::all();
    $roomtype           = roomtype::all();
    $branch             = branch::all();
    $room               = room::all();
    $paidservice        = paidservice::all();
    $season             = season::all();

    return view('createreservation', compact('reservasis', 'user', 'detailreservation', 'roomtype', 'branch', 'room', 'paidservice', 'season'));
  }

  public function store(){
    $a = DB::table('reservation')
            ->join('branch','reservation.IdBranch', '=', 'branch.IdBranch')
            ->select('reservation.*','branch.*')
            ->get();
    $b = DB::table('branch')
            ->join('room', 'branch.IdBranch', '=', 'room.IdBranch')
            ->select('room.*', 'branch.*')
            ->get();

    $r='P';
    $a='-';
    $tgl= date("dmy",strtotime(request('date')));
    $kodebooking = $r.$tgl.$a.request('IdUser');

    // $idBook=reservation::all()->last()->IdReservation;
    // $idBook2 = 1 + $idBook;
    DB::table('branch')
            ->join('room', 'branch.IdBranch', '=', 'room.IdBranch')
            ->select('room.*', 'branch.*')
            ->get();
    $fasilitas= paidservice::find(request('IdPaidService'));

    $jenis = roomtype::find(request('IdRoomType'));
    $season = season::find(request('IdSeason'));

    $startDate=Carbon::parse(request('CheckInDate'));
    $endDate=Carbon::parse(request('CheckOutDate'));

    $interval= $startDate->diffInDays($endDate);

    $harga = DB::table('price')
            ->join('roomtype', 'price.IdPrice', '=', 'roomtype.IdPrice')
            ->select('price.PriceNominal')
            ->get();

    reservation::create([
      'IdReservation'=>request('IdReservation'),
      'IdBooking'=>request('IdBooking'),//$kodebooking,
      'IdUser'=>request('IdUser'),
      'IdBranch'=>request('IdBranch'),
      'CreditCardOwner'=>request('CreditCardOwner'),
      'CreditCardNumber'=>request('CreditCardNumber'),
      'Credit'=>request('Credit'),
      'Jaminan'=>'300000',
      'Deposit'=>request('Deposit'),
      'Date'=>request('Date')
    ]);

    detailreservation::create([
      'IdBooking'=>request('IdBooking'),//$idBook2,
      'IdPaidService'=>request('IdPaidService'),
      'CheckInDate'=>request('CheckInDate'),
      'CheckOutDate'=>request('CheckOutDate'),
      'AdultQuantity'=>request('AdultQuantity'),
      'KidsQuantity'=>request('KidsQuantity'),
      'RoomName'=>request('RoomName'),
      'RoomQuantity'=>request('RoomQuantity'),
      'UnitPrice'=>request('UnitPrice'),
      'TotalPrice'=> $interval * ($harga *request('RoomQuantity') + $fasilitas['paidservice'])

    ]);

    return redirect()->route('reservasi.store',compact('reservation','user','detailreservation','paidservice','branch','roomtype','season','room'))->with('success','Succesfully input your data');

  }
  //
  // public function store(Request $request)
  // {
  //     $user = new season;
  //
  //     $user->FirstName = $request->FirstName;
  //     $user->LastName = $request->LastName;
  //     $user->IdentityNumber = $request->IdentityNumber;
  //     $user->PhoneNumber = $request->PhoneNumber;
  //     $user->Addess = $request->Addess;
  //
  //
  //     $user->save();
  //     return view('season/showallseason',['data' => $data]);
  // }

  public function getDataTamu()
  {
    return view('dataTamu');
  }

  public function pembayaran()
  {
    return view('pembayaran');
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
