<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PositionExam extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'exam_id',
        'position_id',
        'admission',
        'admission_month',
        'periodical',
        'periodical_frequency_id',
        'change_position',
        'back_work',
        'dismission'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function frequency()
    {
        return $this->hasOne(Frequency::class, 'id', 'periodical_frequency_id');
    }
}
