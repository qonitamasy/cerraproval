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
        Schema::create('applications', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('brand');
            $table->string('modeltype');
            $table->string('pemasaran');
            $table->string('pembuat');
            $table->string('alamat');
            $table->string('localrepName');
            $table->string('localrepAlamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambars');
    }
};
