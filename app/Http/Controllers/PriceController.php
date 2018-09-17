<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\price;
use App\roomtype;

class PriceController extends Controller
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
      return view('/price/create');
  }

  function showall(){
      $data = DB::table('roomtype')
                     ->join('price', 'roomtype.IdPrice', '=', 'price.IdPrice')
                     ->select('roomtype.IdRoomType','roomtype.RoomName','price.PriceNominal')
                     ->get();
      return view('/price/showall',['data' => $data]);
  }

 function showallprice(){
     $data = DB::table('price')
             ->select('price.IdPrice','price.PriceNominal')
             ->get();

    return view('/price/showallprice',['data' => $data]);

 }

  public function store(Request $request)
  {
      $price = new price;

      $price->IdPrice = $request->IdPrice;
      $price->PriceNominal = $request->PriceNominal;

      $price->save();

      $data = DB::table('roomtype')
                     ->join('price', 'roomtype.IdPrice', '=', 'price.IdPrice')
                     ->select('roomtype.IdRoomType','roomtype.RoomName','price.PriceNominal')
                     ->get();
      return view('price/showall',['data' => $data]);
  }

  public function edit($IdRoomType)
  {
      $roomtype = roomtype::find($IdRoomType);

      if(!$roomtype)
      {
          abort(404);
      }

      return view('price/edit',['roomtype' => $roomtype]);

  }

  public function update(Request $request,$IdRoomType)
  {
      $roomtype = roomtype::find($IdRoomType);

      $roomtype->IdPrice = $request->IdPrice;
      $roomtype->RoomName = $request->RoomName;


      $roomtype->save();

      return redirect('/price/showall');
  }



  public function destroy($IdPrice)
  {
      $price = price::find($IdPrice);
      $price->delete();

      return redirect('/price/showallprice');
  }
}
