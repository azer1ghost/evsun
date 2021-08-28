<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('detail')->nullable();
            $table->string('serial')->unique();
            $table->string('images')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('price')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('ordering')->nullable();
            $table->foreignId('product_category_id')->nullable()->constrained('product_categories')->onDelete('SET NULL');
            $table->integer('view_count')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Storage::deleteDirectory('products');
        Schema::dropIfExists('products');
    }
}
