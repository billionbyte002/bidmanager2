<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('freelancer_projects', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('project_name'); // Project name
            $table->text('description')->nullable(); // Project description
            $table->decimal('budget_min', 10, 2)->nullable(); // Minimum budget
            $table->decimal('budget_max', 10, 2)->nullable(); // Maximum budget
            $table->string('currency')->nullable(); // Currency type
            $table->string('client_name')->nullable(); // Client's name
            $table->string('client_country')->nullable(); // Client's country
            $table->text('skills_required')->nullable(); // Skills required for the project (comma-separated)
            $table->boolean('is_awarded')->default(false); // Whether the project is awarded
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancer_projects');
    }
};
