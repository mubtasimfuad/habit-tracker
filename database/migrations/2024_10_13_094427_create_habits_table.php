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
    Schema::create('habits', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('name');  // Name of the habit
        $table->integer('goal'); // Goal for the habit (e.g., number of days)
        $table->date('start_date');
        $table->date('end_date')->nullable(); // Optional, if the user sets an end date
        $table->enum('status', ['in_progress', 'completed', 'failed'])->default('in_progress');
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
        Schema::dropIfExists('habits');
    }
};
