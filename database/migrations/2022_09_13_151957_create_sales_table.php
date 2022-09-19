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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string("date");
            $table->string("lastChangeDate");
            $table->string("supplierArticle"); 
            $table->string("techSize");
            $table->string("barcode");
            $table->string("totalPrice");
            $table->integer("discountPercent");
            $table->boolean("isSupply");
            $table->boolean("isRealization");
            $table->integer("promoCodeDiscount");
            $table->string("warehouseName");
            $table->string("countryName");
            $table->string("oblastOkrugName");
            $table->string("regionName");
            $table->integer("incomeID");
            $table->string("saleID");
            $table->bigInteger("odid");
            $table->bigInteger("spp");
            $table->string("forPay");
            $table->string("finishedPrice");
            $table->string("priceWithDisc");
            $table->integer("nmId");
            $table->string("subject");
            $table->string("category");
            $table->string("brand");
            $table->integer("IsStorno");
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
        Schema::dropIfExists('sales');
    }
};
