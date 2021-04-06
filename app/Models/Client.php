<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client_type_id', 'employee_id', 'unity_id', 'name', 'document', 'phone', 'phone', 'address', 'email'
    ];

    public function client_type()
    {
        return $this->belongsTo(ClientType::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }
}
