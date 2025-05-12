<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->foreignId('product_category_id')->constrained('product_categories'); 
        // Ini akan menambah kolom 'product_category_id' dan menghubungkannya ke tabel 'product_categories'
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('product_category_id'); // Menghapus kolom saat rollback
    });
}

};
