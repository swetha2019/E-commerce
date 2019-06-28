<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
  use Illuminate\Support\Facades\Input;
    use Hash;
    use Crypt;
use Validator;

use Illuminate\Http\Request;
use DB;

class admin extends Controller
{
   public function index()
            {
                	return view('Admin.adminlogin');
            }
   public function adminlogin(Request $request)
            {

                   $validator = Validator::make($request->all(),[
                  'email' => 'required|email',
                  'password' => 'required']); 

                     if($validator->fails())
                        {
                         return  back()->withErrors($validator)->withInput($request->email);
                        }
                    else 
                      {
                         $email=$request->input('email');
                          $password=$request->input('password');
                          //print_r(bcrypt($password));
                         $data['array']= db::table('vendor_registration')->where('email',$email)->Where('password',$password)->pluck('password');
                                                  
                        return view('test',$data);
                     }
                                
            }

   public function vendor_detail()
            {
                    	$newvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',0)->get();
                      $recentvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',1)->get();
                     $count=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',0)->Where('notification',0)->get();
                    	return view('Admin.admihome')->with('array',$newvendor)->with('array2',$recentvendor)->with('count',$count);
            }

   public function approved(Request $request,$id)
            {

                     db::table('vendor_registration')->where('id',$id)->update(['approval_status'=>'1']);
                     return redirect('adminhome');
           }
   public function vendor_edit(Request $request,$id)
            {
                     $data['array']=db::table('vendor_registration')->where('id',$id)->get();
                     return view('Admin.vendor_profile',$data);
            }

 public function notification(Request $request,$id)
            {

                        db::table('vendor_registration')->where('id',$id)->update(['notification'=>'1']);
                        $data['array']=db::table('vendor_registration')->where('id',$id)->get();
                         return view('Admin.vendor_profile',$data);
            }
}
