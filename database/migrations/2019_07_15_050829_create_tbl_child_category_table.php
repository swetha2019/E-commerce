<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblChildCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_child_category_one', function (Blueprint $table) {
            $table->increments('child_category_id')->unique();
            $table->integer('category_id')->notnull();
            $table->integer('subcategory_id')->notnull();  
            $table->string('childcategory_name')->notnull();         
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
