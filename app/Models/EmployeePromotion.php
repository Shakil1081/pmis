<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class EmployeePromotion extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    public $table = 'employee_promotions';

    protected $appends = [
        'office_order',
    ];

    protected $dates = [
        'go_issue_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'employee_id',
        'new_designation_id',
        'go_issue_date',
        'office_order_date',
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

    public function employee()
    {
        return $this->belongsTo(EmployeeList::class, 'employee_id');
    }

    public function new_designation()
    {
        return $this->belongsTo(Designation::class, 'new_designation_id');
    }

    public function getGoIssueDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setGoIssueDateAttribute($value)
    {
        $this->attributes['go_issue_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function setOfficeOrderDateAttribute($value)
    {
        if (!$value) {
            $this->attributes['office_order_date'] = null;
            return;
        }

        try {
            $this->attributes['office_order_date'] = Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d');
        } catch (\Exception $e) {
            $this->attributes['office_order_date'] = $value; // Or null if you prefer
        }
    }


    public function getOfficeOrderAttribute()
    {
        return $this->getMedia('office_order')->last();
    }
}
