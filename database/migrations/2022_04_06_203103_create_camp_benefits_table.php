<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // Cara 1
            // $table->bigInteger('camp_id')->unsigned();
            // $table->unsignedBigInteger('camp_id');

            // Cara 2
            $table->foreignId('camp_id')->constrained(); // Syaratnya nama tabelnya harus sama

            $table->string('name');
            $table->timestamps();

            // Cara 1
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
