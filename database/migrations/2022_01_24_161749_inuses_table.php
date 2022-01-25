<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inuses', function (Blueprint $table) {
            $table->id();
            $table->integer('thing_id');
            $table->integer('place_id');
            $table->integer('user_id');
            $table->integer('amount'); //(количество)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inuses');
    }
}
