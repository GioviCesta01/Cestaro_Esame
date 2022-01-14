<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->text('city')-> nullable();
            $table->string('photo')-> nullable();
            $table->float('size')-> nullable();
            $table->string('foglio catastale')-> nullable();
            $table->string('mappale catastale')-> nullable();
            $table->string('parcella catastale')-> nullable();
            $table->string('typology of ground')-> nullable();
            $table->string('typology of irrigation')-> nullable();
            $table->string('typology of offer')-> nullable();
            $table->float('canone offerta')-> nullable();
            $table->boolean('availability')-> nullable();

    
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
