<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;


class admin_user extends Model
{

    protected $table = "vendor_registration";
	public static function add_user($data)
					{
				   admin_user::insert($data);

					}
	public static function select_user()
					{
                        $usertype='admin_user';
                        $data=db::table('vendor_registration')->where('usertype',$usertype)->get();					
                        return $data;
					 
					}
	
	public static function delete_user($id)
					{
                        $usertype='admin_user';
                        $data=db::table('vendor_registration')->where('id',$id)->Where('usertype',$usertype)->get();					
                        return back();
					 
					}
    
}
