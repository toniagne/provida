<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained();
            $table->foreignId('position_id')->constrained();
            $table->string('admission')->nullable();
            $table->string('admission_month')->nullable();
            $table->string('periodical')->nullable();
            $table->foreignId('periodical_frequency_id')->constrained('frequencies')->nullable();
            $table->string('change_position')->nullable();
            $table->string('back_work')->nullable();
            $table->string('dismission')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('position_exams');
    }
}
