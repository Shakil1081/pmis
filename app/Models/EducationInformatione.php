<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class EducationInformatione extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    protected $appends = [
        'catificarte',
    ];

    public $table = 'education_informationes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name_of_exam_id',
        'exam_board_id',
        'concentration_major_group',
        'school_university_name',
        'result_id',
        'passing_year',
        'achievement_types_id',
        'achivement',
        'employee_id',
        'exam_degree',
        'cgpa',
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

    public function name_of_exam()
    {
        return $this->belongsTo(Examination::class, 'name_of_exam_id');
    }

    public function exam_board()
    {
        return $this->belongsTo(ExamBoard::class, 'exam_board_id');
    }

    public function result()
    {
        return $this->belongsTo(Result::class, 'result_id');
    }

    public function achievement_types()
    {
        return $this->belongsTo(AchievementschoolsUniversity::class, 'achievement_types_id');
    }

    public function getCatificarteAttribute()
    {
        return $this->getMedia('catificarte')->last();
    }

    public function employee()
    {
        return $this->belongsTo(EmployeeList::class, 'employee_id');
    }
}
