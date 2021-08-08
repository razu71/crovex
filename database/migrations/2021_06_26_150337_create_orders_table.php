<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('package_type_id')->constrained('package_types')->onDelete('cascade');
            $table->foreignId('package_days_id')->constrained('package_days')->onDelete('cascade');
            $table->string('time')->nullable();
            $table->integer('pax')->nullable();
            $table->text('reciever_name')->nullable();
            $table->text('reciever_address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('meal_package')->nullable();
            $table->string('soup_package')->nullable();
            $table->string('meal')->nullable();
            $table->string('soup')->nullable();
            $table->text('disallowed_1')->nullable();
            $table->text('disallowed_2')->nullable();
            $table->text('disallowed_3')->nullable();
            $table->string('recieve_type')->nullable();
            $table->string('order_type')->nullable();
            $table->date('deliver_date')->nullable();
            $table->date('cancel_date')->nullable();
            $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade');
            $table->string('incharge')->nullable();
            $table->integer('status')->nullable()->default(0);
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
        Schema::dropIfExists('orders');
    }
}