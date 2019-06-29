<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

   use Hash;
   use Crypt;
   use Validator;
   use DB;


class admin_controller extends Controller
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

                       try {
                        	
                         db::table('vendor_registration')->where('id',$id)->update(['notification'=>'1']);
                        $data['array']=db::table('vendor_registration')->where('id',$id)->get();
                         return view('Admin.vendor_profile',$data);
                      }
                     catch (Exception $e) 
                      {
                      	 return back();
                        	
                        }
           }
   public function admin_edit(Request $request,$id)
   {
        $admin_detail['detail']=DB::table('vendor_registration')->where('id',$id)->Where('usertype','admin')->get();
        return view('Admin.admin_edit',$admin_detail);
   }
   public function admin_logout(Request $request)
     {

        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('admin');
    }
   public function admin_update(Request $request,$id)
     {
                   $validator = Validator::make($request->all(),
                   	[ 'name' => 'required',
                      'image' => 'required',
                       'nw_phone' => 'required|numeric',
                       'nw_email' => 'required|email', 
                  ]);
              
              if($validator->fails())
                   {
                     return  back()->withErrors($validator);
                   }
              else 
                   { 
		                    $admin_updateDetails['name']=$request->input('name');
		                   $admin_updateDetails['phone']=$request->input('nw_phone');
		                   $admin_updateDetails['email']=$request->input('nw_email');
		                   
		                   if ($request->hasFile('image')) 

							{
							        $image = $request->file('image');
									$name = time().'_'.$image->getClientOriginalName();
									$destinationPath = public_path('/admin_profile');
									$image->move($destinationPath, $name);
								    $admin_updateDetails['image']=$name;
						    }
						    else
						    {
						    	return back()->with('message','please choose profile picture');
						    }
						    if ($request->hasFile('logo')) 

							{
							        $logo = $request->file('logo');
									$logo_name = 'logo'.'_'.$logo->getClientOriginalName();
									$logo_destinationPath = public_path('/site_logo');
									$logo->move($logo_destinationPath, $logo_name);
									$admin_updateDetails['logo']=$logo_name;
						    }
						    else
						    {
						    	return back()->with('message','please choose profile picture');
						    }
						    try 
						    {
						    	 db::table('vendor_registration')->where('id',$id)->Where('usertype','admin')->update($admin_updateDetails);
		                         return back()->with('message',"Updation is Completed");
						    } 
						    catch (Exception $e)
						     {
						    	 return back()->with('message',"please check you input field");
						    }

		              

										               
		          }
        }
        public function admin_change_password(Request $request,$id)
        {

                  $validator = Validator::make($request->all(),
                   	[ 'old_password' => 'required',
                      'nw_password' => 'required|required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
                      'confirm_password' => 'required|same:nw_password']);
              
              if($validator->fails())
                   {
                     return  back()->withErrors($validator);
                   }
                   else
                   {
                     $password_detail['password']=$request->input('nw_password');
                      $current_password=$request->input('old_password');
                      $data=db::table('vendor_registration')->where('password',$current_password)->Where('id',$id)->Where('usertype','admin')->pluck('password');
                         if(isset($data[0]))
                         {
		                         try 
								    {
								    	 db::table('vendor_registration')->where('id',$id)->Where('usertype','admin')->Where('password',$current_password)->update($password_detail);
				                        return back()->with('message','password is changed');
								    } 
								    catch (Exception $e)
								     {
								     return back()->with('message','The current password is incorrect.');
								    }
						}
						else
						{
							 return back()->with('message','The current password is incorrect.');
						}

                    }
                   


        }
   
}
