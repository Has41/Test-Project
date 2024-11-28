<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropAssignedToFromRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->dropColumn('assigned_to');  // Drop the assigned_to column
        });
    }
    
    public function down()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->unsignedBigInteger('assigned_to');  // Re-add the assigned_to column
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade');  // Re-add the foreign key
        });
    }
    
}
