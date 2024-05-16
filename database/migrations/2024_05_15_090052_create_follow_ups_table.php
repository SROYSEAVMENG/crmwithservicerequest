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
        Schema::create('follow_ups', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no');
            $table->bigInteger('a_t_m_s_id');
            $table->date('call_date');
            $table->string('account');
            $table->bigInteger('users_id');
            $table->string('model');
            $table->string('site_id');
            $table->string('site');
            $table->string('vendor');
            $table->string('contact');
            $table->string('sub_status');
            $table->string('action_taken');
            $table->string('next_activity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_ups');
    }
};
