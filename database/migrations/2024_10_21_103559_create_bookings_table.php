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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            $table->dateTime('order_date');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->text('special_request')->nullable();
            $table->enum('room_type', ['Single', 'Double', 'Suite']);
            $table->enum('status', ['checked-in', 'checked-out', 'in-progress']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
