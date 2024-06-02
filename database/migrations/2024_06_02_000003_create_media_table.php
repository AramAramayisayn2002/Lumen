<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('message_id');
            $table->string('data');
            $table->unsignedBigInteger('media_type_id');
            $table->timestamps();
//            $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
            $table->foreign('media_type_id')->references('id')->on('media_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
