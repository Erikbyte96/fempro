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
        Schema::create('settings', function (Blueprint $table) {

            $table->id();

            $table->string('company_name');

            $table->text('address_hu')->nullable();
            $table->text('address_en')->nullable();

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->string('logo')->nullable();

            $table->string('footer_logo')->nullable();

            $table->timestamps();

        });
    }
};
