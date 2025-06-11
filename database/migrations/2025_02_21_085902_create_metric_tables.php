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
        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->string('metric_key', 100)->unique();
            $table->timestamps();
        });

        Schema::create('metric_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('metric_id')->constrained()->onDelete('cascade');
            $table->string('user_id', 100)->index(); // identifier of the person. Can be a string or a number
            $table->timestamp('achieved_at'); // when they achieved the metric
            $table->decimal('value', 10, 2); // the actual value of the metric
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metric_values');
        Schema::dropIfExists('metrics');
    }
};
