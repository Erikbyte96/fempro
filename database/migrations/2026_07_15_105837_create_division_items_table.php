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
        Schema::create('division_items', function (Blueprint $table) {

            $table->id();

            $table->foreignId('division_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('text_hu');

            $table->string('text_en');

            $table->integer('sort_order')
                ->default(0);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('division_items');
    }
};
