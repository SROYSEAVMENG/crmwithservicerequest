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
        Schema::create('call_details', function (Blueprint $table) {
            $table->id();
            $table->string('docket_no');
            $table->string('reference_no');
            $table->string('contact_person');
            $table->bigInteger('a_t_m_s_id');
            $table->string('call_type');
            $table->string('contact_no');
            $table->date('call_date');
            $table->string('source');
            $table->string('sub_call_type');
            $table->string('type');
            $table->string('diagnoise');
            $table->bigInteger('services_id');
            $table->string('vendor');
            $table->time('target_resolution_time');
            $table->string('ticket_owner');
            $table->string('model');
            $table->string('status');
            $table->string('sub_status');
            $table->time('target_response_time');
            $table->bigInteger('users_id');
            $table->text('activity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_details');
    }
};
