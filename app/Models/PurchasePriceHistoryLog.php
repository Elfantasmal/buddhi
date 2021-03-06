<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PurchasePriceHistoryLog extends Model
{
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'commodity_id',
        'purchase_price',
        'changed_at',
    ];

    public function commodity()
    {
        return $this->belongsTo('App\Models\Commodity');
    }
}
