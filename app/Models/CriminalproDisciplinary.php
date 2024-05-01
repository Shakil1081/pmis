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

class CriminalproDisciplinary extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    protected $appends = [
        'court_orader',
    ];

    public $table = 'criminalpro_disciplinaries';

    protected $dates = [
        'date_of_prosecution',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'criminalprosecutione_id',
        'government_order_no',
        'court_name',
        'date_of_prosecution',
        'description',
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

    public function criminalprosecutione()
    {
        return $this->belongsTo(CriminalProsecutione::class, 'criminalprosecutione_id');
    }

    public function getCourtOraderAttribute()
    {
        return $this->getMedia('court_orader')->last();
    }

    public function getDateOfProsecutionAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfProsecutionAttribute($value)
    {
        $this->attributes['date_of_prosecution'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
