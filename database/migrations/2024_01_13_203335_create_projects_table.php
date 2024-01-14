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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('project');
            $table->foreignId('role_id')->constrained('roles')->cascadeOnDelete();
            $table->text('mere_info')->nullable();

            $table->string('github_url')->nullable();
            $table->string('other_url')->nullable();

            $table->boolean('active');

            $table->string('titel_1')->nullable();
            $table->string('titel_2')->nullable();
            $table->string('titel_3')->nullable();
            $table->string('titel_4')->nullable();
            $table->string('titel_last')->nullable();

            $table->text('description');
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('description_3')->nullable();
            $table->text('description_4')->nullable();
            $table->text('description_last')->nullable();

            $table->string('image')->nullable();    
            $table->string('image_1')->nullable();    
            $table->string('image_2')->nullable();    
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_mobile')->nullable();
            $table->string('image_desktop')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
