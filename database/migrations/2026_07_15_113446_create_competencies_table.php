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
        Schema::create('competencies', function (Blueprint $table) {

            $table->id();

            $table->string('label_hu');
            $table->string('label_en');

            $table->text('text_hu');
            $table->text('text_en');

            $table->string('image')->nullable();

            $table->boolean('reverse_layout')
                ->default(false);

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
        Schema::dropIfExists('competencies');
    }
};
