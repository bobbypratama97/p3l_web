<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class userController extends Controller
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
        $data = user::all(); 
        return view('showalluser',['data' => $data]);
    }
}
