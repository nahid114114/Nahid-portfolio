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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            // --- নতুন কলামগুলো এখানে যোগ করুন ---
        $table->string('institution_name');
        $table->string('degree');
        $table->date('start_date');
        $table->date('end_date')->nullable(); // Running Education এর জন্য
        $table->text('description')->nullable(); 
        // ------------------------------------
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
