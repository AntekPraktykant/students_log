<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_statuses', function (Blueprint $table) {
            $table->integer('student_id');
            $table->date('day');
            $table->enum('status', array('N','S','O'))->nullable();
            $table->timestamps();

            $table->primary(array('student_id', 'day'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
