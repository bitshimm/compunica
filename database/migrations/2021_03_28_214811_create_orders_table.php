<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('application_id')->unsigned();
            $table->string('type_of_service');
            $table->integer('cost');
            $table->bigInteger('employee_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('orders', function(Blueprint $table){
            $table->foreign('application_id')->references('applications')->on('id')->onDelete('cascade');
            $table->foreign('employee_id')->references('employees')->on('id')->onDelete('cascade');
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
