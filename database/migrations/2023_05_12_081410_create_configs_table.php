<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('ref_id');
            $table->foreign('ref_id')->references('ref_code')->on('sellers')->onDelete('restrict')->onUpdate('cascade');
            $table->string("name");
            $table->string('UUID');
            $table->text("link");
            $table->unsignedInteger('worker_id');
            $table->foreign('worker_id')->references("id")->on('workers')->onDelete('restrict')->onUpdate('cascade');
            $table->morphs('configable');
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
        Schema::dropIfExists('configs');
    }
}
