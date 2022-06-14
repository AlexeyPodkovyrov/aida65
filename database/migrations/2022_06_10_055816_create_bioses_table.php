<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bioses', function (Blueprint $table) {
			$table->unsignedBigInteger('PC_ID')->nullable();
			$table->foreign('PC_ID')
			->references('PC_ID')->on('computers');
            $table->id('ID');
            $table->string('Description');
			$table->string('Manufacturer');
			$table->string('Version');
			$table->string('SMBIOS_Version');
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
        Schema::dropIfExists('bioses');
    }
}
