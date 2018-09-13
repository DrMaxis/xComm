<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            /* 
            $table->string('Cash App');
            $table->string('Zelle');
            $table->string('Paypal');
            $table->string('Venmo');
            $table->string('Square Cash');
            $table->string('Apple Pay');
            $table->string('Samsung Pay');
            $table->string('Amazon Card');
            $table->string('PNC');
            $table->string('Wells Fargo');
            $table->string('Chase');
            $table->string('SunTrust');
            $table->string('Citigroup');
            $table->string('Merrill Lynch');
            $table->string('JP Morgan Chase'); 
            */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
