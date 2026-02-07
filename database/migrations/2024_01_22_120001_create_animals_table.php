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
            $table->enum('type', ['individual', 'batch'])->default('individual');
            $table->string('identification');
            $table->string('species', 100);
            $table->string('breed', 100);
            $table->enum('sex', ['male', 'female']);
            $table->integer('age');
            $table->decimal('weight', 10, 2);
            $table->text('health_book')->nullable();
            $table->text('treatments')->nullable();
            $table->text('vaccinations')->nullable();
            $table->integer('batch_size')->nullable();
            $table->string('qr_code', 50)->nullable()->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
};