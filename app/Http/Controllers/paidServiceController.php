<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paidservice;

class paidServiceController extends Controller
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
        return view('paidservice/create'); 
    }

    function showall(){
        $data = paidservice::all(); 
        return view('paidservice/showallpaidservice',['data' => $data]);
    }

    public function store(Request $request)
    {
        $paidservice = new paidservice;
        $paidservice->IdPaidService = $request->IdPaidService;
        $paidservice->PaidServiceName = $request->PaidServiceName;
        $paidservice->PaidServicePrice = $request->PaidServicePrice;
        $paidservice->PaidServiceDetail = $request->PaidServiceDetail;

        $paidservice->save();

        $data = paidservice::all(); 
        return view('paidservice/showallpaidservice',['data' => $data]);
    }

    public function edit($IdPaidService)
    {
        $paidservice = paidservice::find($IdPaidService);

        if(!$paidservice)
        {
            abort(404);
        }
 
        return view('paidservice/edit',['paidservice' => $paidservice]);

    }

    public function update(Request $request,$IdPaidService)
    {
        $paidservice = paidservice::find($IdPaidService);
        $paidservice->PaidServiceName =  $request->PaidServiceName;
        $paidservice->PaidServicePrice = $request->PaidServicePrice;
        $paidservice->PaidServiceDetail = $request->PaidServiceDetail;

        $paidservice->save();

        return redirect('/paidservice/showallpaidservice');

        
    }

    public function destroy($IdPaidService)
    {
        $paidservice = paidservice::find($IdPaidService);
        $paidservice->delete();

        return redirect('/paidservice/showallpaidservice');
    }

}
