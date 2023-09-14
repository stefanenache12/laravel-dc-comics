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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',250);
            $table->text('desciption')->nullable();
            $table->string('thumb',1024)->nullable();
            $table->float('price',4,2);
            $table->string('series',64)->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type',64)->nullable();
            $table->json('artists')->nullable();
            $table->json('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
