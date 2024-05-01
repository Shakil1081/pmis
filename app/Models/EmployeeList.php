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

class EmployeeList extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    public $table = 'employee_lists';

    protected $dates = [
        'date_of_birth',
        'fjoining_date',
        'date_of_con_serviec',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'nid_upload',
        'passport_upload',
        'license_upload',
        'office_orderno',
        'fjoining_letter',
        'office_order',
        'electric_signature',
        'employee_photo',
    ];

    protected $fillable = [
        'employeeid',
        'cadreid',
        'fullname_bn',
        'fullname_en',
        'fname_bn',
        'fname_en',
        'mname_bn',
        'mname_en',
        'date_of_birth',
        'height',
        'special_identity',
        'home_district_id',
        'marital_statu_id',
        'gender_id',
        'religion_id',
        'blood_group_id',
        'nid',
        'passport',
        'license_type_id',
        'email',
        'mobile_number',
        'fjoining_date',
        'project_name',
        'job_type_id',
        'fjoiningofficename',
        'date_of_con_serviec',
        'quota_id',
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

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function home_district()
    {
        return $this->belongsTo(District::class, 'home_district_id');
    }

    public function marital_statu()
    {
        return $this->belongsTo(Maritalstatus::class, 'marital_statu_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class, 'religion_id');
    }

    public function blood_group()
    {
        return $this->belongsTo(BloodGroup::class, 'blood_group_id');
    }

    public function getNidUploadAttribute()
    {
        return $this->getMedia('nid_upload')->last();
    }

    public function getPassportUploadAttribute()
    {
        return $this->getMedia('passport_upload')->last();
    }

    public function license_type()
    {
        return $this->belongsTo(LicenseType::class, 'license_type_id');
    }

    public function getLicenseUploadAttribute()
    {
        return $this->getMedia('license_upload')->last();
    }

    public function getFjoiningDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFjoiningDateAttribute($value)
    {
        $this->attributes['fjoining_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function job_type()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }

    public function getOfficeOrdernoAttribute()
    {
        return $this->getMedia('office_orderno')->last();
    }

    public function getFjoiningLetterAttribute()
    {
        return $this->getMedia('fjoining_letter')->last();
    }

    public function getOfficeOrderAttribute()
    {
        return $this->getMedia('office_order')->last();
    }

    public function getDateOfConServiecAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfConServiecAttribute($value)
    {
        $this->attributes['date_of_con_serviec'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function quota()
    {
        return $this->belongsTo(Quotum::class, 'quota_id');
    }

    public function getElectricSignatureAttribute()
    {
        $file = $this->getMedia('electric_signature')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getEmployeePhotoAttribute()
    {
        $file = $this->getMedia('employee_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
}
