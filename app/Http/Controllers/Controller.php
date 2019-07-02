<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

   use Hash;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index2(Request $request)
    {
    	                  $email=$request->input('email');
                          $password=db::table('vendor_registration')->where('email',$email)->Where('usertype','admin')->pluck('password');
                          // $hashed = Hash::make($password);
                          print_r($password);
                           $pwd2=$request->input('password');
                         if(Hash::check($password, $pwd2))
							{
							    echo "1st";
							}
						elseif(Hash::check($pwd2, $password))
						    {    
						    echo "2nd";
						    }
    }
}
