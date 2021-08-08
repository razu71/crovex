<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('package_type_id')->after('contact');
            $table->unsignedBigInteger('package_day_id')->after('package_type_id');
            $table->tinyInteger('meal_time')->after('package_day_id');
            $table->tinyInteger('pax')->after('meal_time');
            $table->string('receiver_name')->after('pax');
            $table->string('receiver_contact')->after('receiver_name');
            $table->string('unit_number')->after('receiver_contact');
            $table->string('building_name')->nullable()->after('unit_number');
            $table->string('road')->after('building_name');
            $table->string('city')->after('road');
            $table->string('postcode')->after('city');
            $table->string('state')->after('postcode');
            $table->tinyInteger('meal_package')->after('state');
            $table->tinyInteger('soup_package')->after('meal_package');
            $table->tinyInteger('soup')->after('soup_package');
            $table->tinyInteger('rice')->after('soup');
            $table->string('disallowed_1')->after('rice');
            $table->string('disallowed_2')->after('disallowed_1');
            $table->string('disallowed_3')->after('disallowed_2');
            $table->tinyInteger('disallowed_spicy')->after('disallowed_3');
            $table->tinyInteger('receive_type')->after('disallowed_spicy');
            $table->tinyInteger('order_type')->after('receive_type');
            $table->dateTime('begin_date')->after('order_type');
            $table->unsignedBigInteger('driver_id')->after('begin_date');
            $table->unsignedBigInteger('staff_id')->after('driver_id');
            $table->tinyInteger('status')->after('staff_id');
            $table->string('balance_date')->after('status');
            $table->dateTime('cancellation_date')->after('balance_date');
            $table->string('profile_id')->after('cancellation_date');
            $table->string('order_id')->after('profile_id');

            //foreign
            $table->foreign('package_type_id')->on('package_types')->references('id');
            $table->foreign('package_day_id')->on('package_days')->references('id');
            $table->foreign('driver_id')->on('drivers')->references('id');
            $table->foreign('staff_id')->on('staff')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
}
