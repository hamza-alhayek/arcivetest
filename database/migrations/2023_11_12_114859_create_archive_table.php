<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('Maincat', 191);
            $table->timestamp('filedate');
            $table->bigInteger('userid')->unsigned();
            $table->string('filepath', 191);
            $table->string('subject', 191);
            $table->string('keywords', 500);
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
        Schema::dropIfExists('archive');
    }
}
