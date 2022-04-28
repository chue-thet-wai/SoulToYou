<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idol_mtvs', function (Blueprint $table) {
            $table->id();
            $table->string('mtv_id');
            $table->string('title');
            $table->string('video_title');
            $table->string('album_id');
            $table->string('url');
            $table->text('description');
            $table->text('description_mm');
            $table->string('duration');
            $table->string('viewer');
            $table->string('status');
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
        Schema::dropIfExists('idol_mtvs');
    }
};
