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
        Schema::table("works",function(Blueprint $table){
            $table->bigInteger("SnUser");
            $table->foreign("SnUser")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("works",function(Blueprint $table){
            if(Schema::hasColumn('works', 'SnUser')) {
                $table->removeColumn("SnUser");
            };
        });
    }
};
