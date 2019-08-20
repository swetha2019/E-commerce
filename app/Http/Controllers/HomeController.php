<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

//use Illuminate\Support\Facades\validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
use Validator;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function countries()
    {
        $countryname = DB::table('countries')->get();
        $statename = DB::table('states')->get();
        
        $state=Auth::user()->state;
        $dist=Auth::user()->district;
        
        $state_data=DB::table('states')->select('name')->where('id',$state)->get();
        
        $district_data=DB::table('districts')->select('name')->where('id',$dist)->get();
        
       
        return view('edit_profile')->with('country',$countryname)->with('state',$statename)->with('state_name',$state_data)->with('dist_name',$district_data);
    }

    public function district(Request $request)
    {
        $get_id=$request->get('state_id');
        $dist = DB::table('districts')
                   ->where('state_id', $get_id)
                   ->get();
        echo json_encode($dist);
    }

    
    public function index()
    {
        $vendor_id = Auth::user()->id;
        $categories=DB::table('tbl_categories')->get();
        $products=DB::table('products')->where('vendor_id',$vendor_id)->get();
        $data=DB::table('vendor_subscription')->where('vendor_id',$vendor_id)->get();
        return view('profile',['sub_data'=>$data])->with('product_count',$products)->with('category',$categories);
    }
   

    public function edit(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'reg_no' => 'required',          
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email', 
            'pincode' => 'required',          
            'landmark' => 'required',
            'fax' => 'numeric|digits:10',  
            'landline_number' => 'numeric|digits:10',
            'web_url' => 'required',
            'fb_url' => 'required',
            'insta_url' => 'required',
            'logo' => ' dimensions:width=84,height=84|mimes:jpeg,png,jpg',
            'image' => 'mimes:jpeg,png,jpg'
        ]);
          if($validator->fails())
           {
              return  back()->withErrors($validator)->withInput($request->all());
            }
                                     
            $user_id = Auth::user()->id;
            $updateDetails=array( 
                                  'comp_reg_number'=>$request->input('reg_no'),
                                    'name' => $request->input('name'),
                                    'phone'=>$request->input('phone'),
                                    'email' => $request->input('email'),
                                    'state' => $request->input('state'),
                                    'district' => $request->input('district'),
                                    'country' => $request->input('country'),
                                    'pincode'=>$request->input('pincode'),
                                    
                                    'landmark'=>$request->input('landmark'),
                                    'fax'=>$request->input('fax'),
                                    'landline_number'=>$request->input('landline_number'),
                                    'website'=>$request->input('web_url'),
                                    'facebook_url'=>$request->input('fb_url'),
                                    'instagram_url'=>$request->input('insta_url'),
                                );
            
                    DB::table('vendor_registration')
                        ->where('id', Auth::user()->id)
                        ->update($updateDetails);

                        if(Input::hasFile('image'))
                {

                    $file = Input::file('image');
                    $file->move(public_path().'/image/',$file->getClientOriginalName());
                    $url = URL::to("/").'/image/'.$file->getClientOriginalName();


                    $updateDetails=array(
                                    'image' => $url
                                  );

                     DB::table('vendor_registration')
                        ->where('id', Auth::user()->id)
                        ->update($updateDetails);

                    
                }
                 if(Input::hasFile('logo'))
                {

                    $file = Input::file('logo');
                    $file->move(public_path().'/image/',$file->getClientOriginalName());
                    $url = URL::to("/").'/image/'.$file->getClientOriginalName();


                    $updateDetails=array(
                                    'logo' => $url
                                  );

                     DB::table('vendor_registration')
                        ->where('id', Auth::user()->id)
                        ->update($updateDetails);
                }
                return redirect('/home');
      }

      
      public function logout(Request $request)
      {
          // $this->guard()->logout();
          $request->session()->flush();
          $request->session()->regenerate();
          return redirect('login');
      }

      public function subscription(Request $request)
      {
          $vendor_id = Auth::user()->id;
          $pack_values = $request->input('pack_name');
          $pack_amount = $request->input('pack_amount');
               
            if ($pack_values=='Trial pack')
            {
              $frst_sub_data = array('vendor_id' => $vendor_id,'subscription_name'=>$pack_values,'pack_amount'=>$pack_amount);
              return view('payment',['frst_pack_data'=>$frst_sub_data]);
            }
            elseif ($pack_values=='Monthly pack') 
            {
              $scnd_sub_data = array('vendor_id' => $vendor_id,'subscription_name'=>$pack_values,'pack_amount'=>$pack_amount);
              return view('payment',['scnd_pack_data'=>$scnd_sub_data]);

            }
            elseif ($pack_values=='Yearly pack')
            {
              $thrd_sub_data = array('vendor_id' => $vendor_id,'subscription_name'=>$pack_values,'pack_amount'=>$pack_amount);
              return view('payment',['thrd_pack_data'=>$thrd_sub_data]);
            }
 
    }

    public function change_password()
    {   
        $vendor_id=Auth::user()->id;
        return view('change_password');
    }

    public function update_password(Request $request)
    {
       
      $old_password=Auth::user()->password;

      $validator = Validator::make($request->all(),[
            'current_password' => 'required|same:old_password',          
            'new_password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'confirm_password' => 'required|same:new_password',
            
        ]);
          // if($validator->fails())
          //  {
          //     return  back()->withErrors($validator)->withInput($request->all());
          //   }
              
              
       $current_password=$request->input('current_password');
       $new_password=$request->input('new_password');
       
       
       if ((Hash::check($current_password, Auth::user()->password))) {
         
        $update_password=array('password' =>bcrypt( $new_password ));

        DB::table('vendor_registration')->where('id', Auth::user()->id)->update($update_password);
        return redirect('/change_password')->with("success","Password changed successfully !.");
       
        
      }else{
        return back()->withErrors($validator);
       
       }

      
    }



    
    
    
}