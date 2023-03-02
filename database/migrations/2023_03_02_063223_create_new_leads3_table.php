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
        Schema::create('NLead', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('source_id');
            $table->string('remark');
            $table->string('interest');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('Customer');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('source_id')->references('id')->on('Source');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NLead');
    }
};
