<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtestatProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atestat_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
             //$table->string('course_title', 255)->nullable();
             $table->integer('course_id');
              $table->string('credits', 255)->nullable();
               $table->string('hours', 255)->nullable();
                $table->string('marks', 255)->nullable();
                 $table->string('nac_grade', 255)->nullable();
                  $table->string('ects_grade', 255)->nullable();
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
        Schema::dropIfExists('atestat_profiles');
    }
}
