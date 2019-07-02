<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class demo_serach extends Controller
{
  public function search(Request $request)
  {
  	$q = $request->input('search');
    $user['detail'] = DB::table('vendor_registration')->where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
    {
       return view('test',$user);
    }
    else
    {
     return back();
    }
  }
}
