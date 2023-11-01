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
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('fund_categorie_id');
            $table->unsignedBigInteger('fund_sub_categorie_id');
            $table->string('isin');
            $table->string('wkn');
            $table->timestamps();

            $table->foreign('fund_categorie_id')->references('id')->on('fund_categories');
            $table->foreign('fund_sub_categorie_id')->references('id')->on('fund_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};
