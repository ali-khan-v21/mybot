<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            // $table->increments('id');
            $table->unsignedInteger('ref_code');
            $table->unsignedInteger('percentage');
            $table->unsignedBigInteger("user_id");
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('username')->nullable();
            $table->unsignedBigInteger('balance')->default(0);
            $table->unsignedBigInteger('total')->default(0);
            $table->unsignedBigInteger('bank_number')->default(0000000000000000);
            $table->timestamps();
            $table->primary('ref_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
