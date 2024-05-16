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
        Schema::create('dispatches', function (Blueprint $table) {
            $table->id();
            $table->string('docket_no');
            $table->date('created_date');
            $table->date('call_date');
            $table->string('bank_docket_no');
            $table->bigInteger('a_t_m_s_id');
            $table->string('site');
            $table->string('account');
            $table->string('bank');
            $table->string('source');
            $table->string('diagnoisis');
            $table->string('call_type');
            $table->string('sub_call_type');
            $table->string('region');
            $table->string('address');
            $table->string('location');
            $table->string('contact');
            $table->string('phone');
            $table->string('sub_status');
            $table->string('dispatch_date');
            $table->string('engineer');
            $table->string('mobile');
            $table->string('action_taken');
            $table->string('close_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispatches');
    }
};
