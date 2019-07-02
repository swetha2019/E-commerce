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
                          $data= db::table('vendor_registration')->where('email',$email)->Where('password',$password)->Where('usertype','admin')->pluck('id');
                        //print_r($data);
                          if(isset($data[0]))
                          {
                            $request->session()->put('userid',$data[0]);
                            return redirect('adminhome');
                          }
                          else
                          {
                            return  back()->withErrors($validator);
                          }

                      }
                    //  return view('test',$data);
                    
                                
            }

   public function vendor_detail(Request $request)
            {

            if($request->session()->has('userid'))
                {
                  $id=$request->session()->get('userid');
                  $usertype="admin";
                  $admin_detail['detail']=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();

                  $newvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',0)->get();
                  $recentvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',1)->get();
            $count=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',0)->Where('notification',0)->get();

                	return view('Admin.admihome',$admin_detail)->with('array',$newvendor)->with('array2',$recentvendor)->with('count',$count);

               } 
             else
               {
                   return  back()->withErrors($validator);
               }  
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

   public function admin_edit(Request $request,$id)
   {
        $admin_detail['detail']=DB::table('vendor_registration')->where('id',$id)->Where('usertype','admin')->get();
        return view('Admin.admin_edit',$admin_detail);
   }
   public function admin_logout()
   {

        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('admin');
   }

}
