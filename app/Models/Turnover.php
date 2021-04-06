<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turnover extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'unity_id', 'name', 'amount'
    ];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = str_replace('R$ ', '', str_replace(',', '.', str_replace('.', '', $value)));
    }

}
