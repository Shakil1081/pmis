<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class JobHistory extends Model implements HasMedia
{
    use InteractsWithMedia, Auditable, HasFactory;

    public $table = 'job_histories';

    protected $appends = [
        'go_upload',
    ];

    protected $dates = [
        'joining_date',
        'release_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'level_1',
        'designation_id',
        'joining_date',
        'release_date',
        'level_2',
        'level_3',
        'level_4',
        'level_5',
        'employee_id',
        'grade_id',
        'institutename',
        'academy_type',
        'acadaylocation',
        'posting_in_circle',
        'postingindivision',
        'posting_in_range',
        'circle_list_id',
        'division_list_id',
        'range_list_id',
        'beat_list_id',
        'office_unit_id',
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

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }

    public function getJoiningDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setJoiningDateAttribute($value)
    {
        $this->attributes['joining_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setReleaseDateAttribute($value)
    {
        $this->attributes['release_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function employee()
    {
        return $this->belongsTo(EmployeeList::class, 'employee_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function circle_list()
    {
        return $this->belongsTo(ForestState::class, 'circle_list_id');
    }

    public function division_list()
    {
        return $this->belongsTo(ForestDivision::class, 'division_list_id');
    }

    public function range_list()
    {
        return $this->belongsTo(ForestRange::class, 'range_list_id');
    }

    public function beat_list()
    {
        return $this->belongsTo(ForestBeat::class, 'beat_list_id');
    }

    public function office_unit()
    {
        return $this->belongsTo(OfficeUnit::class, 'office_unit_id');
    }

    public function getGoUploadAttribute()
    {
        return $this->getMedia('go_upload')->last();
    }
}
