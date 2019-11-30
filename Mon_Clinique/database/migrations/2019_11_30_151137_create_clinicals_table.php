<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_clinical');
            $table->string('adrese_clinical');
            $table->string('telephone_clinical');
            $table->string('email_clinical');
            $table->string('siteweb_clinical');
            $table->string('logo_clinical');
            $table->string('description_clinical');
            $table->string('fax_clinical');
            $table->integer('prixticket_clinical');
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
        Schema::dropIfExists('clinicals');
    }
}
