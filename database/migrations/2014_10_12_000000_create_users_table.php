<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('user_name');
            $table->string('store_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_role', ['client', 'vendor'])->nullable();
            $table->string('user_photo')->nullable();
            $table->string('banner_photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('street_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('shipping_street_number')->nullable();
            $table->string('shipping_street_name')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_zipcode')->nullable();
            $table->string('shipping_country')->nullable();
            $table->boolean('verified')->default(false);
            $table->text('verify_token')->nullable();
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('users');
    }
}
