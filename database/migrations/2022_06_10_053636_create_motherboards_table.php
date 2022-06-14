<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotherboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motherboards', function (Blueprint $table) {
			$table->unsignedBigInteger('PC_ID')->nullable();
			$table->foreign('PC_ID')
			->references('PC_ID')->on('computers');
            $table->id('ID');
			$table->string('Name');
			$table->string('Manufacturer');
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
        Schema::dropIfExists('motherboards');
    }
}
