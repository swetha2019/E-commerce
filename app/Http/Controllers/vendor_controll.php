<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class vendor_controll extends Controller
{
	public  function signup(Request $r)
	{
		return view('auth.register');
	}



		public function logout(Request $request)
{
   // $this->guard()->logout();
   auth()->logout();
   return redirect('/');
}
		
		


 }
