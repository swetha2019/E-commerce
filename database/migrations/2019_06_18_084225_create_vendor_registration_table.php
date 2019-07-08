<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_registration', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('comp_reg_number')->nullable();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
           // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
          $table->boolean('verified')->default(0); 
            $table->string('email_token')->nullable();
            $table->string('place')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
            $table->string('landmark')->nullable();
            $table->string('fax')->nullable();
            $table->string('landline_number')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->string('usertype')->nullable();
             $table->boolean('approval_status')->default(0);
              $table->boolean('notification')->default(0);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_registration');
    }
}
