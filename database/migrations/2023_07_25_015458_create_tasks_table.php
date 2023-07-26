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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("task_title", 255);
            $table->string("description", 255);
            $table->string("status", 45)->default(0);
            $table->date("date");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("category_id");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
