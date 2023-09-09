<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuPredmetiStudenti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predmeti_studenti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('studenti');
            $table->foreignId('predmet_id')->constrained('predmeti');
            $table->integer("ocjena");
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
        Schema::dropIfExists('predmeti_studenti');
    }
}
