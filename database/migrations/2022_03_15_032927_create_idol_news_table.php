<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdolNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idol_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('new_id');
            $table->string('title');
            $table->string('title_mm');
            $table->text('description');
            $table->text('description_mm');
            $table->string('image');
            $table->string('status');
            $table->string('type');
            $table->string('viewer');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('idol_news');
    }
}
