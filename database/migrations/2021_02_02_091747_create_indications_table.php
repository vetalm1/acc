<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('object_id')->unsigned();
            $table->bigInteger('device_id')->unsigned();
            $table->string('indication', 10);
            $table->string('indication_photo', 30);
            $table->timestamps();
        });

        Schema::table('indications', function (Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('object_id')
                ->references('id')
                ->on('objects')
                ->onDelete('cascade');

            $table->foreign('device_id')
                ->references('id')
                ->on('devices')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indications');
    }
}
