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
        Schema::create("workers", function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->string("workeraddress");
            $table->string("workerphone");
            $table->unsignedBigInteger('work_id');
            $table->foreign("work_id")->references("id")->on("works")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
