<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('phone')->unique();
            $table->string('title')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('gender')->nullable();
            $table->string('altphone')->nullable();
            $table->string('bdate')->nullable();
            $table->string('edate')->nullable();   
            $table->string('offemail')->nullable();       
            $table->string('country')->nullable();
            $table->string('stateoforigin')->nullable(); 
            $table->string('localgovt')->nullable();
            $table->string('town')->nullable();
            $table->string('religion')->nullable();
            $table->Text('address')->nullable();
            $table->Text('permanentaddress')->nullable();
            $table->Text('contactaddress')->nullable();
            $table->Text('denomination')->nullable();
            $table->string('passport')->nullable();
            $table->Text('maidenname')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
