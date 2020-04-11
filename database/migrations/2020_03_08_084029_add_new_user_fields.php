<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('payment_option')->nullable()->after("active");
            $table->string('card_number')->nullable()->after("payment_option");
            $table->string('card_exp_month')->nullable()->after("card_number");
            $table->string('card_exp_year')->nullable()->after("card_exp_month");
            $table->string('card_cvv_code')->nullable()->after("card_exp_year");
            $table->string('bank_name')->nullable()->after("card_cvv_code");
            $table->string('bank_accont_no')->nullable()->after("bank_name");
            $table->string('bank_ifsc_no')->nullable()->after("bank_accont_no");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('payment_option');
            $table->dropColumn('card_number');
            $table->dropColumn('card_exp_month');
            $table->dropColumn('card_exp_year');
            $table->dropColumn('card_cvv_code');
            $table->dropColumn('bank_name');
            $table->dropColumn('bank_accont_no');
            $table->dropColumn('bank_ifsc_no');
        });
    }
}
