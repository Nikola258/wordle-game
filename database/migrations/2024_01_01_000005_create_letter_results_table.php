<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('letter_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guess_id')->constrained()->cascadeOnDelete();
            $table->char('letter');
            $table->integer('position');
            $table->string('result'); // correct, wrong_position, incorrect
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('letter_results');
    }
};
