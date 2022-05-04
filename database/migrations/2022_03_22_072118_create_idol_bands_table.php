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
        Schema::create('idol_bands', function (Blueprint $table) {
            $table->id();
            $table->string('band_id');
            $table->string('name');
            $table->text('about');
            $table->text('about_mm');
            $table->string('main_image');
            $table->text('images')->nullable();
            $table->string('twitter_subscriber');
            $table->string('instagram_subscriber');
            $table->string('band_type');
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
        Schema::dropIfExists('idol_bands');
    }
};
