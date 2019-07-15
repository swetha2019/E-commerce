<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class model_category extends Model
{
	protected $table = "tbl_child_category_one";
  public static function child_category($data)
		  {
		    model_category::insert($data);
		  }  
  public static function child_select()
		  {
		  	$detail_child=model_category::where('subcategory_id',$subcategory_id)-get();
		  	return back()->with($detail_child);

		  }
}
