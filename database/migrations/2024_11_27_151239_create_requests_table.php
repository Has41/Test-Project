<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();  // auto-increment primary key
            $table->unsignedBigInteger('project_id');  // Foreign key referencing projects table
            $table->unsignedBigInteger('givenBy_id');  // Foreign key referencing users table
            $table->unsignedBigInteger('requestBy_id');  // Foreign key referencing users table
            $table->unsignedBigInteger('assigned_to')->nullable();  // Foreign key referencing users table
            
            $table->timestamps();  // created_at, updated_at columns

            // Define foreign key relationships
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('givenBy_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('requestBy_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
