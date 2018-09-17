<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use View;

class roleController extends Controller
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
        return view('role/create'); 
    }

    public function store(Request $request)
    {
        $role = new role;
        $role->IdRole = $request->idrole;
        $role->roleName = $request->rolename;
        $role->detail = $request->detail;

        $role->save();

        return redirect('/role');
    }

    function afteradd(){
        return view('/role/afteradd');
    }

    function index(){
        $data = role::all(); 
        return view('role.showallrole',['data' => $data]);
    }

    public function destroy($IdRole)
    {
        $role = role::find($IdRole);
        $role->delete();

        return redirect('/role');
    }

    public function edit($IdRole)
    {
        $role = role::find($IdRole);

        if(!$role)
        {
            abort(404);
        }
 
        return view::make('role.edit',compact('role',$role));

    }

    public function update(Request $request,$IdRole)
    {
        $role = role::find($IdRole);
        $role->RoleName =  $request->RoleName;
        $role->Detail = $request->Detail;
        $role->save();

        dd('Success!');

        
    }
}
