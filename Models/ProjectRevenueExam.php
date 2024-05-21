<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectRevenueExam extends Model implements HasMedia
{
    use InteractsWithMedia, Auditable, HasFactory;

    protected $appends = [
        'upload',
    ];

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

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function exam()
    {
        return $this->belongsTo(ProjectRevenuelone::class, 'exam_id');
    }

    public function getUploadAttribute()
    {
        return $this->getMedia('upload')->last();
    }
}
