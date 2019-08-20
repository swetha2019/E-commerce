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
    public function subcategory_select(Request $request)
    {
       $sub = DB::table("tbl_sub_category")
                    ->where("category_id",$request->category_id)
                    ->select('subcategory_name')->get();
        return response()->json($sub);
    }
    
    public function multi(Request $request)
            {
              if($request->hasfile('mul'))
                 {

                    foreach($request->file('mul') as $image)
                    {
                        $name=$image->getClientOriginalName();
                        $image->move(public_path().'/images/', $name);  
                        $data[] = $name; 
                       $dat['image']= implode("//", $data);
                  DB::table('image')->insert($dat);
                    }
                  
                 }
                
            }
            public function display(Request $request)
            {
             
                $img= DB::table('image')->get();
                
                $ex=explode("//",$img);
                foreach ($ex as $ke) {
                  # code...
                
               echo $ke;
              }
            }
        public function pro_edit(Request $request,$id)
        {
          if($request->hasfile('img'))
          {
            foreach($request->file('img') as $image)
                    {
          $img=$image->getClientOriginalName();
          dd($img);
        }
        }
        }    

}
