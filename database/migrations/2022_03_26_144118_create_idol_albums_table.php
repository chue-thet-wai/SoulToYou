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
        Schema::create('idol_albums', function (Blueprint $table) {
            $table->id();
            $table->string('album_id');
            $table->string('band_id')->nullable();
            $table->string('artist_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->text('description_mm');
            $table->string('image');
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
        Schema::dropIfExists('idol_albums');
    }
};
