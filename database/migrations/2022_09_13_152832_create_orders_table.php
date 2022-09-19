<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string("date");
            $table->string("lastChangeDate");
            $table->string("supplierArticle");
            $table->string("techSize");
            $table->string("barcode");
            $table->string("totalPrice");
            $table->integer("discountPercent");
            $table->string("warehouseName");
            $table->string("oblast");
            $table->integer("incomeID");
            $table->bigInteger("odid");
            $table->bigInteger("nmId");
            $table->string("subject");
            $table->string("category");
            $table->string("brand");
            $table->boolean("isCancel");
            $table->string("cancel_dt");
            $table->string("gNumber");
            $table->string("sticker")->nullable();
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
        Schema::dropIfExists('orders');
    }
};
