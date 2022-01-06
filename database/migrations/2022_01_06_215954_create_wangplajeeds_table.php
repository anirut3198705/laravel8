<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWangplajeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wangplajeeds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('id_wan')->nullable();
            $table->string('name_wan')->nullable();
            $table->date ('date_wan')->nullable();
            $table->float('high_wan')->nullable();
            $table->text('add_wan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wangplajeeds');
    }
}
