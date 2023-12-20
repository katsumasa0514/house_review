<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('properties');
            $table->string('ForumName', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forums');
    }
}