<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use App\Mail\approval_mail;


   use Hash;
   use Crypt;
   use Validator;
   use DB;
   use Mail;



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
                        $data= db::table('vendor_registration')->where('email',$email)->Where('usertype','admin')->pluck('password');
                         if(isset($data[0]))
                         {
                            $hased_password=$data[0];
                            if(password_verify($password,$hased_password))
                             {
                                 $id= db::table('vendor_registration')->where('email',$email)->Where('usertype','admin')->pluck('id');
                                 if(isset($id[0]))
                                  {
                                  $request->session()->put('userid',$id[0]);
                                  return redirect('adminhome');
                                  }
                                  else
                                  {
                                  return  redirect('admin')->withErrors($validator);
                                  }
                              }
                            }
                          
                         else
                           {
                             return back()->with('message','Login Faild ');
                           }
                    
                         
                    }      
                                
            }

   public function vendor_detail(Request $request)
            {

            if($request->session()->has('userid'))
                {
                  $search = $request->id;
                  $id=$request->session()->get('userid');
                  $usertype="admin";
                  $admin_detail['detail']=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();

                  $newvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',0)->where('verified',1)->get();
                  $recentvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',1)->where('verified',1)->get();

            $count=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',0)->Where('notification',0)->get();

                	return view('Admin.admihome',$admin_detail)->with('array',$newvendor)->with('array2',$recentvendor)->with('count',$count);

               } 
             else
               {
                   return  back();
               }  
            }

   public function approved(Request $request,$id)
       {
            $usertype="vendor";
            try {
                    db::table('vendor_registration')->where('id',$id)->update(['approval_status'=>'1']);
                    $admin_detail=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();
                     $date=date('Y-m-d H:i:s'); 
            		 foreach ($admin_detail as $fetch) 
                          {
                            $content = ['name'=> $fetch->name,
                             'date'=>$date];
                          }
            		
                  foreach ($admin_detail as $fetch) 
                          {
                              $email=$fetch->email;
                          }

                	 Mail::to($email)->send(new approval_mail($content));
                   return redirect('adminhome')->with('message','You have approved a new company.');
        				} 
        			catch (Exception $e)
        				{
        				  return redirect('adminhome')->with('message','sorry please confirm the email');         		
				         }

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
		                  
		                   $admin_updateDetails['phone']=$request->input('nw_phone');
		                   $admin_updateDetails['email']=$request->input('nw_email');
		                   
		        

              try 
						    {
						    	 db::table('vendor_registration')->where('id',$id)->Where('usertype','admin')->update($admin_updateDetails);
		               return back()->with('message',"Updation is Completed");
						    } 
						  catch (Exception $e)
						     {
						    	 return back()->with('message',"updation faild");
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
                     $data=db::table('vendor_registration')->Where('id',$id)->Where('usertype','admin')->pluck('password');
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
    public function Vendor_Delete(Request $request,$id)//fro deleting
    {
      db::table('vendor_registration')->where('id',$id)->delete();
      return back()->with('message','Dete one vendor');

    }
    public function search(Request $request)
     {
         if($request->ajax())
                 {
                  $output="";

                   $posts = DB::table('vendor_registration')->where('name','LIKE','%'.$id.'%')->orWhere('email','LIKE','%'.$id.'%')->get();
                   return view('Admin.livesearchajax')->withPosts($posts);

                 if($posts)
                  {

                    foreach ($posts as $key => $posts) {
                    $output.='<tr>'.
                    '<td>'.$posts->id.'</td>'.
                    '<td>'.$posts->name.'</td>'.
                    '<td>'.$posts->phone.'</td>'.
                    '<td>'.$posts->email.'</td>'.
                    '</tr>';
                 }
                 return Response($output);

               }
             }
          /*if (is_null($search))
            {
              return back();
            }
            else
            {
          $posts = DB::table('vendor_registration')->where('name','LIKE','%'.$id.'%')->orWhere('email','LIKE','%'.$id.'%')->get();
            return view('Admin.livesearchajax')->withPosts($posts);
            }*/
     }
     public function categories_form(Request $request)
     {
      $category=db::table('tbl_categories')->get();
      return view('Admin.categories_form')->with('category',$category);
     }
     public function add_categories(Request $request)
     {
       $data=db::table('tbl_categories')->get();
       $validator = Validator::make($request->all(),
                    [ 'category_name' => 'required|unique:tbl_categories']);
        if($validator->fails())
              {
                return  back()->withErrors($validator);
               }
        else
             {
                $data['category_name']=$request->input('category_name');
                db::table('tbl_categories')->insert($data);
                return back()->with('message','New category was added');
                $data=db::table('tbl_categories')->get();
             }

     }
     public function add_subcategories(Request $request)
     {
        $validator = Validator::make($request->all(),
        [ 'category_id' => 'required',
          'subcategory_name'=>'required|unique:tbl_sub_category']);
        if($validator->fails())
              {
                return  back()->withErrors($validator);
               }
          else
               {
                echo $data['category_id']=$request->input('category_id');
                 echo $data['subcategory_name']=$request->input('subcategory_name');
                 db::table('tbl_sub_category')->insert($data);
                 return back()->with('message','New Sub Category was added');
                 $data=db::table('tbl_categories')->get();
               }

     }
      public function view_categories(Request $request)
     {
      $category['category']=db::table('tbl_categories')->get();
      return view('Admin.view_category',$category);

     }
  }
   

        
