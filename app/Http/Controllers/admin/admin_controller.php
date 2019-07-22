<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use App\Mail\approval_mail;

   use App\admin_user;
   use App\model_category;
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
                                   // dd($data);
                                    //exit();
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
                                         else
                                     {
                                        return  redirect('admin')->with('message','Password not currect');
                                     }
                                      }
                                    
                                   else
                                     {
                                        return  redirect('admin')->with('message','is not an admin or admin user ');
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
                                 return redirect('new_vendor')->with('message','You have approved a new company.');
                      				} 
                      			catch (Exception $e)
                      				{
                      				  return redirect('new_vendor')->with('message','sorry please confirm the email');         		
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
                  if($request->session()->has('userid'))
                   {
                    $usertype='admin';
                    $id=$request->session()->get('userid');
                        $category=db::table('tbl_categories')->get();
                        $sub_category= db::table('tbl_sub_category')->join('tbl_categories','tbl_categories.category_id','=','tbl_sub_category.category_id')->get();

                        $child_category= db::table('tbl_child_category_one')->join('tbl_sub_category','tbl_sub_category.subcategory_id','=','tbl_child_category_one.subcategory_id')->join('tbl_categories','tbl_categories.category_id','=','tbl_child_category_one.category_id')->get();

                        $child_category2= db::table('tbl_child_category_two')->join('tbl_child_category_one','tbl_child_category_one.child_category_id','=','tbl_child_category_two.child_category_id')->join('tbl_sub_category','tbl_sub_category.subcategory_id','=','tbl_child_category_two.subcategory_id')->join('tbl_categories','tbl_categories.category_id','=','tbl_child_category_two.category_id')->get();
                        
                          $admin_detail=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();
                         
      //d($child_category2);
                        return view('Admin.categories_form')->with('detail',$admin_detail)->with('category',$category)->with('sub_category',$sub_category)->with('child_category',$child_category)->with('child_category2',$child_category2);
                       

                    }
                 }

     public function add_categories(Request $request)
               {
                 
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
                          //$data=db::table('tbl_categories')->get();
                       }

               }

    public function add_subcategory(Request $request)
                 {
                  $category=db::table('tbl_categories')->get();
                  //$sub_category= db::table('tbl_sub_category')->join('tbl_categories','tbl_categories.category_id','=','tbl_sub_category.category_id')->get();

                  return view('Admin.add_sub_category')->with('category',$category);
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
                                     //  $data=db::table('tbl_categories')->get();
                                     }

                           }
      /*public function view_categories(Request $request)
                   {
                    $category['category']=db::table('tbl_categories')->get();
                    return view('Admin.view_category',$category);

                   }*/
     public function Catgory_delete(Request $request,$id)
                    {
                      db::table('tbl_categories')->where('category_id',$id)->delete();
                      return back()->with('message','your are delete one category');
                    }
     public function Catgory_edit(Request $request,$id)
                    {
                      if($request->session()->has('userid'))
                        { 
                          $usertype='admin';
                          $id=$request->session()->get('userid');
                          $admin_detail=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();
                        $category=db::table('tbl_categories')->where('category_id',$id)->get();
                        return view('Admin.Category_edit')->with('category',$category)->with('detail',$admin_detail);
                    }
                    }
      public function update_categories(Request $request,$id)
                    {
                      $validator=validator::make($request->all(),['category_name'=>'required']);
                      $data['category_name']=$request->input("category_name");
                      $category=db::table('tbl_categories')->where('category_id',$id)->update($data);
                      return back()->with('message','The category name was chan;ged');
                    }
    /* public function view_subcategory(Request $request)
                    {
                     $sub_category= db::table('tbl_sub_category')->join('tbl_categories','tbl_categories.category_id','=','tbl_sub_category.category_id')->get();
                    return view('admin.sub_category_view')->with('sub_category',$sub_category);
                    }*/
    public function adminuser_form(Request $request)
                    {
                      return view('admin.adminuser_form')->with('message','Add new user');
                    }
    public function add_user(Request $request)
                    {
                            $validator=validator::make($request->all(),[
                              'admin_user'=>'required',
                              'admin_phone'=>'required',
                              'admin_email'=>'required',
                              'admin_password'=>'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
                            ]);
                            if($validator->fails())
                            {
                            return back()->withErrors($validator);
                            } 

                            else
                            {
                                 $user['name']=$request->input('admin_user');
                                 $user['email']=$request->input('admin_email');
                                 $user['phone']=$request->input('admin_phone');
                                 $user['password']=bcrypt($request->input('admin_password'));
                                 $user['usertype']='admin';
                                 $user['role']=$request->input('role');
                                 admin_user::add_user($user);
                                 return back()->with('message','New user added as admin');
                            }
                     

                    }
    public function view_user(Request $request)
                    {
                     $usertype='admin';
                     $user_role='Super_Admin';
                        $user_detail=db::table('vendor_registration')->where('usertype',$usertype)->whereNotIn('role',[$user_role])->get(); 
                      return view('admin.adminuser_detail')->with('user_detail',$user_detail);
                    }
    
    public function adminuser_delete(Request $request,$id)
                    {
                       $user_detail=admin_user::delete_user();
                      return back()->with('message','Delete Completed');


                   // db::table('tbl_categories')->where('category_id',$id)->delete();

                    }
    public function sub_category_delete(Request $request,$id)
                    {
                       $sub = DB::table("tbl_sub_category")
                                   ->where("subcategory_id",$id)
                                    ->delete();
                      return back()->with('message','Delete Completed');

                    }
    public function sub_category_edit(Request $request,$subid)
                    {
                      if($request->session()->has('userid'))
                        { 
                        $usertype='admin';
                        $id=$request->session()->get('userid');
                        $admin_detail=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();
                        $sub_category1= db::table('tbl_sub_category')
                                          ->join('tbl_categories','tbl_categories.category_id','=','tbl_sub_category.category_id')
                                          ->where('subcategory_id',$subid)
                                          ->get();
 // dd($sub_category1);
 // exit();
 //                      // $sub_category=db::table('tbl_sub_category')->where('subcategory_id',$id)->get();
                     return view('Admin.sub_category_edit')->with('sub_category',$sub_category1)->with('detail',$admin_detail);
                    }
                  }
    public function upadet_subcategories(Request $request,$subid)              
                    {
                        $validator=validator::make($request->all(),[
                            'subcategory_name'=>'required']);
                        $data['subcategory_name']=$request->input('subcategory_name');
                        try 
                        {
                          DB::table('tbl_sub_category')->where('subcategory_id',$subid)->update($data);
                          return back()->with('message','Sub category was changed');
                        } 
                        catch (Exception $e) 
                        {
                          return back();
                          }
                    }
   public function adminuser_edit(Request $request,$id)
                    {
                      $usertype='admin';
                      $user_detail=db::table('vendor_registration')->where('id',$id)->Where('usertype',$usertype)->get(); 
                      return view('Admin.admin_user_detail')->with('user_detail',$user_detail);
                      //dd($user_detail);
                    }
    public function subcategory_select(Request $request)
                    {
                       $sub = DB::table("tbl_sub_category")
                                    ->where("category_id",$request->category_id)
                                    ->get();
                        return response()->json($sub);
                    }
    public function childcategory(Request $request)
                    {
                      $validator=validator::make($request->all(),[
                        'category_id'=>'required',
                        'subcategory_id'=>'required',
                        'childcategory'=>'required'
                      ]);
                      if($validator->fails())
                        {
                        return back()->withErrors($validator); 
                        }
                       else
                        {
                        $data['category_id']=$request->input('category_id');
                       $data['subcategory_id']=$request->input('subcategory_id');
                       $data['childcategory_name']=$request->input('childcategory');
                       model_category::child_category($data);
                       return back()->with('message','chid category was added');

                        }
                    }
     public function child_select(Request $request)
                    {
                     $detail_child= DB::table("tbl_child_category_one")
                                    ->where("subcategory_id",$request->subcategory_id)
                                    ->get();
                     return response()->json($detail_child);
                     return back()->with('message',"New child category was added");
                    }
     public function add_Childcategory(Request $request)
                 {
                  $childcategory=db::table('tbl_categories')->get();
                  return view('Admin.add_child_category')->with('category',$childcategory);
                 }
    public function add_Childcategory2(Request $request)
                 {
                  $childcategory=db::table('tbl_categories')->get();
                  
                  return view('Admin.add_child_category2')->with('category',$childcategory);
                 }




    public function childcategorytwo(Request $request)
                    {
                      $validator=validator::make($request->all(),[
                        'category_id'=>'required',
                        'subcategory_id'=>'required',
                        'childcategory_id'=>'required',
                        'childcategory2'=>'required'
                      ]);
                      if($validator->fails())
                        {
                        return back()->withErrors($validator); 
                        }
                       else
                        {
                        $data['category_id']=$request->input('category_id');
                       $data['subcategory_id']=$request->input('subcategory_id');
                       $data['child_category_id']=$request->input('childcategory_id');
                       $data['child_category_id']=$request->input('childcategory_id');
                       $data['childcategory2_name']=$request->input('childcategory2');
                       DB::table('tbl_child_category_two')->insert($data);
                       return back()->with('message',"New child category was added");
                       //model_category::child_category($data);
                        }
                    }
    public function back(Request $request)
                    {
                      return redirect('categories_form');
                    }
    public function new_vendor(Request $request)
                    {
                
                    if($request->session()->has('userid'))
                        { 
                        $usertype='admin';
                        $id=$request->session()->get('userid');
                        $admin_detail=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();



                          $newvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',0)->where('verified',1)->get();
                          return view('Admin.new_vendor')->with('detail',$admin_detail)->with('array',$newvendor);
                        
                      }

                    }
    public function rect_vendor(Request $request)
                  {
           
                    if($request->session()->has('userid'))
                        { 
                        $usertype='admin';
                        $id=$request->session()->get('userid');
                        $admin_detail=DB::table('vendor_registration')->where('usertype',$usertype)->Where('id',$id)->get();
                  $recentvendor=DB::table('vendor_registration')->where('usertype','vendor')->Where('approval_status',1)->where('verified',1)->get();
                  return view('Admin.recent_vendor')->with('detail',$admin_detail)->with('array2',$recentvendor);
                     }

                  }
    public function edit_admin_user(Request $request,$id)
                   {
                    $validator=validator::make($request->all(),[
                        'role'=>'required']);
                    $data['role']=$request->input('role');
                    try 
                    {
                      DB::table('vendor_registration')->where('id',$id)->update($data);
                      return back()->with('message','Role was changed');
                    } 
                    catch (Exception $e) 
                    {
                      return back();
                    }
                  }
                    
     public function product(Request $request)
                     {
                       if($request->session()->has('userid'))
                        { 
                        $usertype='admin';
                        $id=$request->session()->get('userid');
                        $admin_detail=DB::table('vendor_registration')
                                        ->where('usertype',$usertype)
                                        ->Where('id',$id)->get();
                     $product=DB::table('products')
                        ->select('vendor_registration.name','vendor_registration.email','vendor_registration.phone','products.*','tbl_categories.*','tbl_sub_category.*')
                        ->join('vendor_registration','vendor_registration.id','=','products.vendor_id')
                        ->join('tbl_categories','tbl_categories.category_id','=','products.category')
                         ->join('tbl_sub_category','tbl_sub_category.subcategory_id','=','products.sub_category')
                        ->get();
                     return view('Admin.product_view')->with('product',$product)->with('detail',$admin_detail);


                       }
                   // $sub_category= db::table('tbl_sub_category')->join('tbl_categories','tbl_categories.category_id','=','tbl_sub_category.category_id')->get();


                     }
    public function product_delete(Request $request,$pid)
                    {
                      if($request->session()->has('userid'))
                        { 
                       
                     $product=DB::table('products')->where('id',$pid)->delete();
                     return back()->with('message','one product was delete');
                     }

                    }
    public function product_detail(Request $request,$pid)
                    {
                      if($request->session()->has('userid'))
                        { 
                        $usertype='admin';
                        $id=$request->session()->get('userid');
                        $admin_detail=DB::table('vendor_registration')
                                        ->where('usertype',$usertype)
                                        ->Where('id',$id)->get();
                     $product_detail=DB::table('products')->where('id',$pid)->get();
                     return view('Admin.product_detail')->with('product',$product_detail)->with('detail',$admin_detail);
                      }
                    }
    public function subscription(Request $request)
                     {
                      if($request->session()->has('userid'))
                        { 
                        $usertype='admin';
                        $id=$request->session()->get('userid');
                        $admin_detail=DB::table('vendor_registration')
                                        ->where('usertype',$usertype)
                                        ->Where('id',$id)->get();
                       $subscription=DB::table('vendor_subscription')
                                    ->join('vendor_registration','vendor_subscription.vendor_id','=','vendor_registration.id')
                                    ->get();

                       return view('Admin.subscription')->with('subscription',$subscription)->with('detail',$admin_detail);
                       }
                     }
    public function subscription_delete(Request $request,$pid)
                    {
                      if($request->session()->has('userid'))
                        { 
                       
                     $product=DB::table('vendor_subscription')->where('id',$pid)->delete();
                     return back()->with('message','one vendor subscription detail was delete');
                     }

                    }
    }
   

        
