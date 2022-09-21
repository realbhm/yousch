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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('avatar');
            $table->string('student_code');
            $table->string('student_name');
            $table->string('student_surname');
            $table->date('student_dob');
            $table->string('student_pob');
            $table->text('student_adress');
            $table->string('student_phone');
            $table->string('student_email', 64)->unique();
            $table->string('student_ville');
            $table->string('student_postal');
            $table->string('student_sexe');
            $table->string('student_country');
            $table->foreignId('campus_id')->references('id')->on('campus');

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
        Schema::dropIfExists('students');
    }
};
