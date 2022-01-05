<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('record_id');
            $table->string('lastname', 30);
            $table->string('firstname', 30);
            $table->string('middlename', 30);
            $table->string('gender', 6);
            $table->integer('houseno');
            $table->string('sitio', 30);
            $table->string('barangay', 30);
            $table->integer('mcattle');
            $table->integer('fcattle');
            $table->integer('mcarabao');
            $table->integer('fcarabao');
            $table->integer('mcanine');
            $table->integer('fcanine');
            $table->integer('mfeline');
            $table->integer('ffeline');
            $table->integer('fattener');
            $table->integer('breeder');
            $table->integer('phen');
            $table->integer('prooster');
            $table->integer('drake');
            $table->integer('duck');
            $table->integer('buck');
            $table->integer('doe');
            $table->integer('grooster');
            $table->integer('ghen');
            $table->integer('mnative');
            $table->integer('fnative');
            $table->decimal('latitude', 10, 3);
            $table->decimal('longitude', 11, 3);
            $table->string('img', 80);
            $table->foreignId('admin_id')->references('id')->on('users');
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
        Schema::dropIfExists('records');
    }
}
