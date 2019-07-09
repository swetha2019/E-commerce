<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_sub_category', function (Blueprint $table) {
            $table->increments('subcategory_id')->unique();
            $table->integer('category_id')->notnull();
            $table->string('subcategory_name')->notnull();           });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                //Schema::dropIfExists('tbl_sub_category');
    }
}
