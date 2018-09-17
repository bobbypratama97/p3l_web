<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\price;
use App\roomtype;

class TypeRoomController extends Controller
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

  public function create()
  {
      return view('/roomtype/create');
  }

  function showall(){
      $data = DB::table('roomtype')
                     ->join('price', 'roomtype.IdPrice', '=', 'price.IdPrice')
                     ->select('roomtype.IdRoomType','roomtype.RoomName','roomtype.RoomFacility','roomtype.Smoking','roomtype.RoomDetail','price.PriceNominal')
                     ->get();
      return view('/roomtype/showall',['data' => $data]);
  }

  public function store(Request $request)
  {
      $roomtype = new roomtype;

      $roomtype->IdRoomType = $request->IdRoomType;
      $roomtype->IdPrice = $request->IdPrice;
      $roomtype->RoomName = $request->RoomName;
      $roomtype->RoomFacility = $request->RoomFacility;
      $roomtype->Smoking = $request->Smoking;
      $roomtype->RoomDetail = $request->RoomDetail;

      $roomtype->save();

      $data = DB::table('roomtype')
                     ->join('price', 'roomtype.IdPrice', '=', 'price.IdPrice')
                     ->select('roomtype.IdRoomType','roomtype.RoomName','roomtype.RoomFacility','roomtype.Smoking','roomtype.RoomDetail','price.PriceNominal')
                     ->get();
      return view('roomtype/showall',['data' => $data]);
  }

  public function edit($IdRoomType)
  {
      $roomtype = roomtype::find($IdRoomType);

      if(!$roomtype)
      {
          abort(404);
      }

      return view('roomtype/edit',['roomtype' => $roomtype]);

  }

  public function update(Request $request,$IdRoomType)
  {
      $roomtype = roomtype::find($IdRoomType);

      $roomtype->IdPrice = $request->IdPrice;
      $roomtype->RoomName = $request->RoomName;
      $roomtype->RoomFacility = $request->RoomFacility;
      $roomtype->Smoking = $request->Smoking;
      $roomtype->RoomDetail = $request->RoomDetail;

      $roomtype->save();

      return redirect('/roomtype/showall');
  }

  public function destroy($IdRoomType)
  {
      $roomtype = roomtype::find($IdRoomType);
      $roomtype->delete();

      return redirect('/roomtype/showall');
  }
}
