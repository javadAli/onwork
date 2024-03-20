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
        Schema::create('monthDays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');
            $table->foreign('worker_id')->references('id')->on('workers')->cascadeOnDelete();
            $table->smallInteger('day1');
            $table->smallInteger('day2');
            $table->smallInteger('day3');
            $table->smallInteger('day4');
            $table->smallInteger('day5');
            $table->smallInteger('day6');
            $table->smallInteger('day7');
            $table->smallInteger('day8');
            $table->smallInteger('day9');
            $table->smallInteger('day10');
            $table->smallInteger('day11');
            $table->smallInteger('day12');
            $table->smallInteger('day13');
            $table->smallInteger('day14');
            $table->smallInteger('day15');
            $table->smallInteger('day16');
            $table->smallInteger('day17');
            $table->smallInteger('day18');
            $table->smallInteger('day19');
            $table->smallInteger('day20');
            $table->smallInteger('day21');
            $table->smallInteger('day22');
            $table->smallInteger('day23');
            $table->smallInteger('day24');
            $table->smallInteger('day25');
            $table->smallInteger('day26');
            $table->smallInteger('day27');
            $table->smallInteger('day28');
            $table->smallInteger('day29');
            $table->smallInteger('day30');
            $table->smallInteger('day31');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("monthDays");
    }
};
