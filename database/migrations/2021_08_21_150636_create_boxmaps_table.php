<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxmapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxmaps', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->string('title');
                $table->string('description');
                $table->string('lng');
                $table->string('lat');
                $table->string('ques_one')->nullable();
                $table->string('ques_two');
                $table->string('ques_three');
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
        Schema::dropIfExists('boxmaps');
    }
}
