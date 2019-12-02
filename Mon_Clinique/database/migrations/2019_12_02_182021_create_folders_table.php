<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tension_folder');
            $table->string('temperature_folder');
            $table->string('poids_folder');
            $table->string('antecedant_folder');
            $table->string('typeentec_folder');
            $table->string('groupesang_folder');
            $table->string('radio_folder');
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('patient_id');
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
        Schema::dropIfExists('folders');
    }
}
