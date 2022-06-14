<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_storages', function (Blueprint $table) {
			$table->unsignedBigInteger('PC_ID')->nullable();
			$table->foreign('PC_ID')
			->references('PC_ID')->on('computers');
            $table->id('ID');
            $table->string('Serial_Number');
			$table->string('Model_ID');
			$table->string('Version');
			$table->string('Interface_Type');
			$table->string('Size');
			$table->string('Logical_Disk');
			$table->string('File_System');
			$table->string('Logical_Disk_Size');
			$table->string('Logical_Disk_Free_Space');
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
        Schema::dropIfExists('data_storages');
    }
}
