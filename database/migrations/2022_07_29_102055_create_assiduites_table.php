<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assiduites', function (Blueprint $table) {
            $table->id();
            $table->boolean('justificatif'); # 'is_late' , 'is_justify'
            $table->boolean('retard');
            $table->date('date');
            $table->time('time');
            // $table->integer('unit_code');
            // $table->integer('subject_code');
            // $table->integer('student_id'); # en attendant de créer la relation, je la mets à nullable
            $table->timestamps();

            // $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assiduites');
    }
};
