<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'risk', 'work_hour'
    ];

    public function setWorkHourAttribute($value)
    {
        $this->attributes['work_hour'] = str_replace('R$ ', '', str_replace(',', '.', str_replace('.', '', $value)));
    }

    public function getWorkHourAttribute($value)
    {
        return ucfirst($value);
    }
}
