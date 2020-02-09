<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rank');
            $table->timestamps();
        });

        DB::table('ranks')->insert(array('rank'=>'Don'));
        DB::table('ranks')->insert(array('rank'=>'Consigliere'));
        DB::table('ranks')->insert(array('rank'=>'Underboss'));
        DB::table('ranks')->insert(array('rank'=>'Capo'));
        DB::table('ranks')->insert(array('rank'=>'Soldier'));
        DB::table('ranks')->insert(array('rank'=>'Associate'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranks');
    }
}
