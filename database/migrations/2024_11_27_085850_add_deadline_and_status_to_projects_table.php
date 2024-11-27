<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeadlineAndStatusToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->date('deadline')->nullable(); // Adding the deadline column
            $table->enum('status', ['pending', 'in-progress', 'completed', 'on-hold'])->default('pending'); // Adding the status column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('deadline'); // Removing the deadline column
            $table->dropColumn('status'); // Removing the status column
        });
    }
}
