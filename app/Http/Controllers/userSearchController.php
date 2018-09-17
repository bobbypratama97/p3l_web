<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;

class userSearchController extends Controller
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

    function index()
    {
        return view('usersearch');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
        $data = DB::table('user')
            ->where('FirstName', 'like', '%'.$query.'%')
            ->orWhere('IdUser', 'like', '%'.$query.'%')
            ->orWhere('IdType', 'like', '%'.$query.'%')
            ->orWhere('IdRole', 'like', '%'.$query.'%')
            ->orWhere('LastName', 'like', '%'.$query.'%')
            ->orWhere('InstitutionName', 'like', '%'.$query.'%')
            ->orWhere('IdentityNumber', 'like', '%'.$query.'%')
            ->orWhere('PhoneNumber', 'like', '%'.$query.'%')
            ->orWhere('EmailAddress', 'like', '%'.$query.'%')
            ->orWhere('Address', 'like', '%'.$query.'%')
            ->orWhere('RegistrationDate', 'like', '%'.$query.'%')
            ->orderBy('IdUser', 'asc')
            ->get();
           
      }
      else
      {
       $data = DB::table('user')
         ->orderBy('Iduser', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
            $output .= '
            <tr>
            <td>'.$row->IdUser.'</td>
            <td>'.$row->IdType.'</td>
            <td>'.$row->IdRole.'</td>
            <td>'.$row->FirstName.'</td>
            <td>'.$row->LastName.'</td>
            <td>'.$row->InstitutionName.'</td>
            <td>'.$row->IdentityNumber.'</td>
            <td>'.$row->PhoneNumber.'</td>
            <td>'.$row->EmailAddress.'</td>
            <td>'.$row->Address.'</td>
            <td>'.$row->RegistrationDate.'</td>
            </tr>
            ';
       }
      }
      else
      {
       $output = '
        <tr>
            <td align="center" colspan="5">No User Found</td>
        </tr>
        ';
      }
      $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
