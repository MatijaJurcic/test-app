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
            $table->unsignedBigInteger('fund_category_id');
            $table->unsignedBigInteger('fund_subcategory_id');
            $table->string('isin');
            $table->string('wkn');
            $table->timestamps();

            $table->foreign('fund_category_id')->references('id')->on('fund_categories');
            $table->foreign('fund_subcategory_id')->references('id')->on('fund_subcategories');
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
