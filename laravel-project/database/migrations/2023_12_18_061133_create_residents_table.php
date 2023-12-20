<?php
// database/migrations/xxxx_xx_xx_create_residents_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PropertyID')->constrained('properties');
            $table->string('Username');
            $table->string('ProfilePicture')->nullable();
            $table->string('ContactInfo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('residents');
    }
}