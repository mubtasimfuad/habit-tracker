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
    Schema::create('progress', function (Blueprint $table) {
        $table->id();
        $table->foreignId('habit_id')->constrained()->onDelete('cascade');  // Link to the habit
        $table->date('date');  // Date of the progress update
        $table->integer('progress');  // Progress made (e.g., number of days completed)
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
        Schema::dropIfExists('progress');
    }
};
