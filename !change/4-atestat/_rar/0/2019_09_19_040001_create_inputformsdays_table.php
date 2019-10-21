<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputformsdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputformsdays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('diagnoses',500)->comment('Cодержимое элемента');
            $table->text('num_card')->comment('Номер стац карты');
            $table->date('apdate')->comment('Дата начала и конца');
            $table->integer('id_student')->comment('Код студента');
            $table->text('fio')->comment('НФио больного');
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
        Schema::dropIfExists('inputformsdays');
    }
}
