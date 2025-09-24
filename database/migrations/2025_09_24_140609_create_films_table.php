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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image');
            $table->string('title', 200);
            $table->text('description');
            $table->unsignedSmallInteger('grade');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'category_idx');
            $table->foreign('category_id', 'category_fk')
                            ->references('id')
                            ->on('categories');

            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
