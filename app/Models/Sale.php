<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sale
 *
 * @property string $date
 * @property string $lastChangeDate
 * @property string $supplierArticle
 * @property string $techSize
 * @property string $barcode
 * @property string $totalPrice
 * @property int $discountPercent
 * @property bool $isSupply
 * @property bool $isRealization
 * @property int $promoCodeDiscount
 * @property string $warehouseName
 * @property string $countryName
 * @property string $oblastOkrugName
 * @property string $regionName
 * @property string $incomeID
 * @property string $saleID
 * @property string $odid
 * @property string $spp
 * @property string $forPay
 * @property string $finishedPrice
 * @property string $priceWithDisc
 * @property int $nmId
 * @property string $subject
 * @property string $category
 * @property string $brand
 * @property int $IsStorno
 * @property string $gNumber
 * @property string|null $sticker
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sales newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereFinishedPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereForPay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereGNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereIncomeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereIsRealization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereIsStorno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereIsSupply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereLastChangeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereNmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereOblastOkrugName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereOdid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales wherePriceWithDisc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales wherePromoCodeDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereSaleID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereSpp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereSticker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereSupplierArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereTechSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales whereWarehouseName($value)
 * @mixin \Eloquent
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|Sale whereId($value)
 */
class Sale extends Model
{
    use HasFactory;
    // $property = [
    //     "date",
    //     "lastChangeDate",
    //     "supplierArticle",
    //     "techSize",
    //     "barcode",
    //     "totalPrice",
    //     "discountPercent",
    //     "isSupply",
    //     "isRealization",
    //     "promoCodeDiscount",
    //     "warehouseName",
    //     "countryName",
    //     "oblastOkrugName",
    //     "regionName",
    //     "incomeID",
    //     "saleID",
    //     "odid",
    //     "spp",
    //     "forPay",
    //     "finishedPrice",
    //     "priceWithDisc",
    //     "nmId",
    //     "subject",
    //     "category",
    //     "brand",
    //     "IsStorno",
    //     "gNumber"
    // ];
}
