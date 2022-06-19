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
        Schema::create('idol_artists', function (Blueprint $table) {
            $table->id();
            $table->string('artist_id');
            $table->string('band_id');
            $table->string('member_type');
            $table->string('name');
            $table->string('birth_name');
            $table->string('korea_name');
            $table->timestamp('birth_date');
            $table->string('zondic');
            $table->string('height');
            $table->string('blood_type');
            $table->string('mbti');
            $table->text('about');
            $table->text('about_mm');
            $table->string('main_image');
            $table->text('images')->nullable;
            $table->string('status');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('joined_date')->nullable();
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
        Schema::dropIfExists('idol_artists');
    }
};
