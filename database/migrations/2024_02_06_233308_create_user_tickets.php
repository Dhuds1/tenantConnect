<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->timestamps();
            $table->string('topic');
            $table->string('tenant');
            $table->string('building');
            $table->string('unit');
            $table->string('email');
            $table->longText('details');
            $table->string('priority');
            $table->string('title');
            $table->string('status')->default('open');
            $table->string('seen')->default('unseen');
            $table->json('images')->nullable();
            $table->string('last_viewed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
