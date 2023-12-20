<?php
// database/migrations/xxxx_xx_xx_create_threads_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ForumID')->constrained('forums');
            $table->foreignId('ResidentID')->constrained('residents');
            $table->string('Title');
            $table->text('Content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('threads');
    }
}