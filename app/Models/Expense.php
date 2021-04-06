<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'name', 'work_hour', 'administrative', 'expenses'
    ];

    public function setWorkHourAttribute($value)
    {
        $this->attributes['work_hour'] = str_replace('R$ ', '', str_replace(',', '.', str_replace('.', '', $value)));
    }

    public function setAdministrativeAttribute($value)
    {
        $this->attributes['administrative'] = str_replace('R$ ', '', str_replace(',', '.', str_replace('.', '', $value)));
    }

    public function setExpensesAttribute($value)
    {
        $this->attributes['expenses'] = str_replace('R$ ', '', str_replace(',', '.', str_replace('.', '', $value)));
    }
}
