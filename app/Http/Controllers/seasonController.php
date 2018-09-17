<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\season;

class seasonController extends Controller
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
        return view('season/create'); 
    }

    function showall(){
        $data = season::all(); 
        return view('season/showallseason',['data' => $data]);
    }

    public function store(Request $request)
    {
        $season = new season;

        $season->IdSeason = $request->IdSeason;
        $season->IdPrice = $request->IdPrice;
        $season->SeasonName = $request->SeasonName;
        $season->StartDate = $request->StartDate;
        $season->EndDate = $request->EndDate;
        $season->Detail = $request->Detail;
        

        $season->save();

        $data = season::all(); 
        return view('season/showallseason',['data' => $data]);
    }

    public function edit($IdSeason)
    {
        $season = season::find($IdSeason);

        if(!$season)
        {
            abort(404);
        }
 
        return view('season/edit',['season' => $season]);

    }

    public function update(Request $request,$IdSeason)
    {
        $season = season::find($IdSeason);
    
      
        $season->IdPrice = $request->IdPrice;
        $season->SeasonName = $request->SeasonName;
        $season->StartDate = $request->StartDate;
        $season->EndDate = $request->EndDate;
        $season->Detail = $request->Detail;
        

        $season->save();

        return redirect('/season/showallseason');

        
    }

    public function destroy($IdSeason)
    {
        $season = season::find($IdSeason);
        $season->delete();

        return redirect('/season/showallseason');
    }

}
