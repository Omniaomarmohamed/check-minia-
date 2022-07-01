<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaslemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taslemas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 100);
            $table->integer('phone_number')->unique;
            $table->string('order',10);
            $table->Text('comment');
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
        Schema::dropIfExists('taslemas');
    }
}
