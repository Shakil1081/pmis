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

class Publication extends Model implements HasMedia
{
    use InteractsWithMedia, Auditable, HasFactory;

    public $table = 'publications';

    protected $dates = [
        'publication_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const PUBLICATION_TYPE_SELECT = [
        'Journal'     => 'Journal',
        'Magazine'    => 'Magazine',
        'Articles' => 'Articles',
        'Review' => 'Review',
        'Bibliography' => 'Bibliography',
        'Research' => 'Research',
        'Books' => 'Books',
        'Newspapers' => 'Newspapers',
        'Blog' => 'Blog',
    ];
    public const PUBLICATION_TYPE_SELECTBN = [
        'Journal'     => 'জার্নাল',
        'Magazine'    => 'ম্যাগাজিন',
        'Articles' => 'আর্টিক্যাল',
        'Review' => 'রিভিউ',
        'Bibliography' => 'গ্রন্থপঞ্জি',
        'Research' => 'রিসার্চ',
        'Books' => 'বই',
        'Newspapers' => 'পত্রিকা',
        'Blog' => 'ব্লগ',
    ];
    
    protected $fillable = [
        'title',
        'publication_type',
        'publication_media',
        'publication_date',
        'publication_link',
        'description',
        'employee_id',
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

    public function getPublicationDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPublicationDateAttribute($value)
    {
        $this->attributes['publication_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function employee()
    {
        return $this->belongsTo(EmployeeList::class, 'employee_id');
    }
}
