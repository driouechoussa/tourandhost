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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name_en');
            $table->string('product_name_es');
            $table->string('product_name_fr');
            $table->text('product_description_en');
            $table->text('product_description_es');
            $table->text('product_description_fr');
            $table->decimal('product_price', 8, 2);
            $table->string('product_address_en');
            $table->string('product_address_es');
            $table->string('product_address_fr');
            $table->string('product_type');
            $table->integer('product_guests');
            $table->integer('product_beds');
            $table->integer('product_baths');
            $table->integer('product_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
