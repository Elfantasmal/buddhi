<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockIn extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'commodity_id',
        'in_quantity',
        'in_type',
        'in_at'
    ];

    public function commodity() {
        return $this->belongsTo('App\Models\Commodity');
    }
}
