<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function loginLogic(Request $request) {





       $userName = $request->input('userName');
       $userPassword = $request->input('userPassword');

       $userNameDataDecoded = json_decode( json_encode($userName), true);
       $userPasswordDataDecoded = json_decode( json_encode( $userPassword), true);

       $users = DB::table('users')->get();
    
    

       foreach ($users as $userNameData) {
           $userNameDataDecoded =  $userNameData->userName;

       }

       foreach ($users as $userPasswordData) {
        $userPasswordDataDecoded =  $userPasswordData->userPassword;

    }



       if(isset($_POST['submitButton'])) {

  

         if($userNameDataDecoded == $userName and $userPasswordDataDecoded == $userPassword) {

            Session::put('userNameDataDecoded', $userNameDataDecoded);
            session::save();
            return view('layouts.dashboard');

         } else {
             echo "FAILED!!";
         }

         
       }
    }

       public function storedLogin() {
      
      return       Session::get('userNameDataDecoded');


 
        }
    
        public function sessionDie() {
      
                Session::forget('userNameDataDecoded');
                return view('welcome');
    
     
            }
   

    }

    




