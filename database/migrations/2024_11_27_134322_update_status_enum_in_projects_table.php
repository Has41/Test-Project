<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStatusEnumInProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Remove the old 'status' column
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        // Add the new 'status' column with updated enum values
        Schema::table('projects', function (Blueprint $table) {
            $table->enum('status', ['pending', 'in-progress', 'completed', 'open'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revert to the old 'status' column (rollback)
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        // Add the previous 'status' column back with the original enum values
        Schema::table('projects', function (Blueprint $table) {
            $table->enum('status', ['pending', 'in-progress', 'completed', 'on-hold'])->default('pending');
        });
    }
}
