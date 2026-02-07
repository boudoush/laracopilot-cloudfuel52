<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('qr_code')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('species')->nullable();
            $table->string('breed')->nullable();
            $table->integer('age')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('color')->nullable();
            $table->string('gender')->nullable();
            $table->text('health_notes')->nullable();
            $table->string('photo_url')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
};