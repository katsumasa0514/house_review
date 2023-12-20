<?php
// database/migrations/xxxx_xx_xx_create_resources_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PropertyID')->constrained('properties');
            $table->foreignId('ResidentID')->constrained('residents');
            $table->string('Title');
            $table->text('Description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resources');
    }
}