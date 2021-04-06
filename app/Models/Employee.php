<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'unity_id',  'username', 'password', 'name', 'phone', 'address'
    ];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }
}
