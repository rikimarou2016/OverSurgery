<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

     public function login (Request $req)

      {
        $username = $req->input('username');
        $password = $req->input('password');



        $CheckLogin =DB::table('patients')->where(['username'=>$username,'password'=>$password])->first();

         if($username=='BellaT'&& $password =='abcd'||$username=='CaineC'&& $password =='abcd' )
          {
//       A session is created so when a user login it stay persistant.
              \Session::put('patient_id',  $CheckLogin->id);
              \Session::put('patient_surname',  $CheckLogin->surname);
              \Session::put('patient_lastname',  $CheckLogin->lastname);
              \Session::put('patient_name',  $CheckLogin->surname);

              return redirect()->guest('StaffDashboard');
          }

         elseif ( $CheckLogin && $CheckLogin->id >0)
         {
             \Session::put('patient_id',  $CheckLogin->id);
             \Session::put('patient_surname',  $CheckLogin->surname);
             \Session::put('patient_lastname',  $CheckLogin->lastname);
             \Session::put('patient_name',  $CheckLogin->surname);
             return redirect()->guest('PatientDashboard');
         }


          {

               return redirect()->guest('home');

          }

      }








}

?>