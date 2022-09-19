<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Income
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
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereCancelDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereGNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereIncomeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereIsCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereLastChangeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereNmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereOblast($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereOdid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereSticker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereSupplierArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereTechSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Incomes whereWarehouseName($value)
 * @mixin \Eloquent
 */
class Income extends Model
{
    use HasFactory;
}
