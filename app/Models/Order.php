<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Order
 *
 * @property string $date
 * @property string $lastChangeDate
 * @property string $supplierArticle
 * @property string $techSize
 * @property int $barcode
 * @property string $totalPrice
 * @property int $discountPercent
 * @property string $warehouseName
 * @property string $oblast
 * @property int $incomeID
 * @property int $odid
 * @property int $nmId
 * @property string $subject
 * @property string $category
 * @property string $brand
 * @property bool $isCancel
 * @property string $cancel_dt
 * @property string $gNumber
 * @property string $sticker
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders query()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCancelDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereGNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereIncomeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereIsCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereLastChangeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereNmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereOblast($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereOdid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereSticker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereSupplierArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTechSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereWarehouseName($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use HasFactory;
}
