<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuTeme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teme', function (Blueprint $table) {
            $table->id();
            $table->string("naziv");
            $table->text("opis");
            $table->foreignId('student_id')->constrained('studenti')->nullable();
            $table->foreignId('predmet_id')->constrained('predmeti')->nullable();
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
        Schema::dropIfExists('teme');
    }
}
