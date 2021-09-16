<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateValueColumnInAttributeProductTable extends Migration
{
    public function up()
    {
        Schema::table('attribute_product', function (Blueprint $table) {
            $table->foreignId('value_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('attribute_product', function (Blueprint $table) {
            //
        });
    }
}
