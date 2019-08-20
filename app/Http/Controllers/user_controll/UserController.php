<?php

namespace App\Http\Controllers\user_controll;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
use Validator;

class UserController extends Controller
{
   public function product_view()
   {

   	$all_products=DB::table('products')->get();
      $tv=DB::table('products')->where('category','5')->get();
   	// print_r($all_products);exit();
   	$electronics=DB::table('products')->where('category','1')->get();
   	$men=DB::table('products')->where('category','2')->get();
      $kid=DB::table('products')->where('category','4')->get();
   	$women=DB::table('products')->where('category','3')->get();
       //return view("user.front");
   	 return view('user.front')->with('all_products',$all_products)
                                ->with('category1',$men)
                                ->with('category2',$women)
                                ->with('category3',$electronics)
                                ->with('category4',$tv)
                                ->with('category5',$kid);
   	
   }
}
