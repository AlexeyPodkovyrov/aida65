<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideocardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videocards', function (Blueprint $table) {
			$table->unsignedBigInteger('PC_ID')->nullable();
			$table->foreign('PC_ID')
			->references('PC_ID')->on('computers');
            $table->id('ID');
            $table->string('Name');
			$table->string('Memory');
			$table->string('Driver_Version');
			$table->string('Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videocards');
    }
}
