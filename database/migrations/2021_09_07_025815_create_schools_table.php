<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('administrative_unit_id');
            $table->string('name');
            $table->enum('type', ['public', 'private']);
            $table->set('gender', ['males', 'females', 'mixed']);
            $table->set('grade', ['basic', 'middle', 'secondary']);
            $table->string('established_at')->nullable();
            $table->string('api_key')->nullable();
            $table->string('api_secret')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('schools');
    }
}
