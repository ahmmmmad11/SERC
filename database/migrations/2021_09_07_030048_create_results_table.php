<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id');
            $table->foreignId('school_id');
            $table->foreignId('student_id');
            $table->foreignId('teacher_id');
            $table->foreignId('subject_id');
            $table->integer('mark');
            $table->string('academic_year');
            $table->enum('term', ['first', 'last']);
            $table->boolean('administrative_unit_confirmation')->default(0);
            $table->boolean('locality_confirmation')->default(0);
            $table->boolean('state_confirmation')->default(0);
            $table->boolean('federal_confirmation')->default(0);
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
        Schema::dropIfExists('results');
    }
}
