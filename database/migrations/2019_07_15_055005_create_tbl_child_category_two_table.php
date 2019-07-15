<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblChildCategoryTwoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('tbl_child_category_two', function (Blueprint $table) {
            $table->increments('child2_category_id')->unique();
            $table->integer('category_id')->notnull();
            $table->integer('subcategory_id')->notnull(); 
             $table->integer('child_category_id')->notnull(); 
            $table->string('childcategory2_name')->notnull(); 
             }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
Schema::dropIfExists('tbl_child_category_two');
    }
}
