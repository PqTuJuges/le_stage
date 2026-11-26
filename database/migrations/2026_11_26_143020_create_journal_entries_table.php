<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('journal_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('internship_id')->constrained()->cascadeOnDelete();
            $table->date('worked_on');
            $table->decimal('hours', 4, 2);
            $table->string('location');
            $table->text('tasks');
            $table->timestamps();

            $table->unique(['internship_id', 'worked_on']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('journal_entries');
    }
};
