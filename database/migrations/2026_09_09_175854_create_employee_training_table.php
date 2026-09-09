<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employee_training', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
                ->constrained('employees')
                ->onDelete('cascade');

            $table->foreignId('training_id')
                ->constrained('trainings')
                ->onDelete('cascade');

            $table->date('completed_at')->nullable();
            $table->string('status')->default('enrolled');

            $table->timestamps();

            $table->unique(['employee_id', 'training_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_training');
    }
};