<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRevenueExam extends Model
{
    use Auditable, HasFactory;

    public $table = 'project_revenue_exams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'exam_id',
        'exam_name_bn',
        'exam_name_en',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function exam()
    {
        return $this->belongsTo(ProjectRevenuelone::class, 'exam_id');
    }
}
