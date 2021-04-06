<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'frequency_id', 'unity_id', 'amount'
    ];

    public function frequency()
    {
        return $this->hasOne(Frequency::class, 'id','frequency_id');
    }

    public function unity()
    {
        return $this->hasOne(Unity::class, 'id','unity_id');
    }

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = str_replace('R$ ', '', str_replace(',', '.', str_replace('.', '', $value)));
    }

    public function getAmountAttribute($value)
    {
        return ucfirst($value);
    }
}
