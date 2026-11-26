<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('internships', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();

        $table->string('company_name');
        $table->string('company_number')->nullable();
        $table->string('mentor_name');
        $table->string('mentor_email');
        $table->string('mentor_phone');

        $table->date('starts_on');
        $table->date('ends_on');
        $table->boolean('already_employed')->default(false);

        $table->string('agreement_status')->default('pending');
        $table->date('agreement_signed_at')->nullable();
        $table->string('agreement_file')->nullable();

        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('internships');
}
};
