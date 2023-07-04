<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('user_id')->unsigned();
            $table->string('client_name');
            $table->string('client_contact_no');
            $table->string('customer_name');
            $table->string('customer_contact_no');
            $table->string('pickup_location');
            $table->string('drop_off_location');
            $table->string('order_description');
            $table->integer('packages_no');
            $table->integer('items_amount');
            $table->string('mode_of_service_charge');
            $table->string('status');
            $table->timestamps();



        });

//        Schema::table('orders', function (Blueprint $table) {
//
//
//            $table->foreign('user_id')->references('id')->on('users');
//
//
//        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
