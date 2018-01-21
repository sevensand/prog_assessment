<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgAssessment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('assessments', function (Blueprint $table) {
          $table->integer('user_id');
          $table->string('name');
          $table->string('url');
          $table->string('created_date');
          $table->string('last_push_date');
          $table->text('description');
          $table->string('no_of_star');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessment');
    }
}
