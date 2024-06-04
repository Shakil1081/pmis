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
        'prl_date',
        'fjoining_date',
        'first_joining_g_o_date',
        'date_of_gazette',
        'date_of_regularization',
        'regularization_issue_date',
        'date_of_con_serviec',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'birth_certificate_upload',
        'nid_upload',
        'passport_upload',
        'license_upload',
        'certificate_upload',
        'first_joining_order',
        'fjoining_letter',
        'date_of_gazette_if_any',
        'regularization_office_orde_go',
        'confirmation_in_service',
        'electric_signature',
        'employee_photo',
    ];

    protected $fillable = [
        'employeeid',
        'cadreid',
        'batch_id',
        'fullname_bn',
        'fullname_en',
        'fname_bn',
        'fname_en',
        'mname_bn',
        'mname_en',
        'date_of_birth',
        'prl_date',
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
        'projectrevenue_id',
        'joiningexaminfo_id',
        'departmental_exam_id',
        'project_id',
        'grade_id',
        'fjoining_date',
        'first_joining_office_name',
        'first_joining_g_o_date',
        'first_joining_memo_no',
        'date_of_gazette',
        'date_of_regularization',
        'regularization_issue_date',
        'freedom_fighter_id',
        'date_of_con_serviec',
        'quota_id',
        'freedomfighter',
        'created_at',
        'updated_at',
        'deleted_at',
        'approved',
        'approved_by'
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

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getBirthCertificateUploadAttribute()
    {
        return $this->getMedia('birth_certificate_upload')->last();
    }

    public function getPrlDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPrlDateAttribute($value)
    {
        $this->attributes['prl_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
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

    public function projectrevenue()
    {
        return $this->belongsTo(Joininginfo::class, 'projectrevenue_id');
    }

    public function joiningexaminfo()
    {
        return $this->belongsTo(ProjectRevenueExam::class, 'joiningexaminfo_id');
    }
    public function examinations()
    {
        return $this->belongsTo(ProjectRevenueExam::class, 'name_of_exam_id');
    }

    public function departmental_exam()
    {
        return $this->belongsTo(ProjectRevenuelone::class, 'departmental_exam_id');
    }

    public function freedomfighter()
    {
        return $this->belongsTo(FreedomFighteRelation::class, 'freedomfighter_id');
    }
   
    public function freedom_fighter()
    {
        return $this->belongsTo(FreedomFighteRelation::class, 'freedomfighter_id');
    }
   

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function getCertificateUploadAttribute()
    {
        return $this->getMedia('certificate_upload')->last();
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function getFjoiningDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFjoiningDateAttribute($value)
    {
        $this->attributes['fjoining_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getFirstJoiningGODateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFirstJoiningGODateAttribute($value)
    {
        $this->attributes['first_joining_g_o_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getFirstJoiningOrderAttribute()
    {
        return $this->getMedia('first_joining_order')->last();
    }

    public function getFjoiningLetterAttribute()
    {
        return $this->getMedia('fjoining_letter')->last();
    }

    public function getDateOfGazetteAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfGazetteAttribute($value)
    {
        $this->attributes['date_of_gazette'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfGazetteIfAnyAttribute()
    {
        return $this->getMedia('date_of_gazette_if_any')->last();
    }

    public function getDateOfRegularizationAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfRegularizationAttribute($value)
    {
        $this->attributes['date_of_regularization'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getRegularizationIssueDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setRegularizationIssueDateAttribute($value)
    {
        $this->attributes['regularization_issue_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getRegularizationOfficeOrdeGoAttribute()
    {
        return $this->getMedia('regularization_office_orde_go')->last();
    }

    public function getDateOfConServiecAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfConServiecAttribute($value)
    {
        $this->attributes['date_of_con_serviec'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getConfirmationInServiceAttribute()
    {
        return $this->getMedia('confirmation_in_service')->last();
    }

    public function quota()
    {
        return $this->belongsTo(Quotum::class, 'quota_id');
    }
    public function jobhistories()
    {
        return $this->hasmany(JobHistory::class, 'employee_id');
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

    
    public function detail()
    {
        return $this->hasOne(EmployeeListDetail::class, 'general_information_id');
    }


    public function educations()
    {
        return $this->hasMany(EducationInformatione::class, 'employee_id');
    }


    // public function name_of_exam()
    // {
    //     return $this->hasMany(Examination::class, 'name_of_exam_id');
    // }

    public function professionales()
    {
        return $this->hasMany(Professionale::class, 'employee_id');
    }
    public function addressdetailes()
    {
        return $this->hasMany(Addressdetaile::class, 'employee_id');
    }
    public function emergencecontactes()
    {
        return $this->hasMany(EmergenceContacte::class, 'employee_id');
    }
    public function spouseinformationes()
    {
        return $this->hasMany(SpouseInformatione::class, 'employee_id');
    }
  
    public function employeepromotions()
    {
        return $this->hasMany(EmployeePromotion::class, 'employee_id');
    }

    public function leaverecords()
    {
        return $this->hasMany(LeaveRecord::class, 'employee_id');
    }
    public function serviceparticulars()
    {
        return $this->hasMany(ServiceParticular::class, 'employee_id');
    }
    public function trainings()
    {
        return $this->hasMany(Training::class, 'employee_id');
    }
    public function childinformationes()
    {
        return $this->hasMany(Child::class, 'employee_id');
    }

    public function travelRecords()
    {
        return $this->hasMany(TravelRecord::class, 'employee_id');
    }
    public function foreigntravelpersonals()
    {
        return $this->hasMany(ForeignTravelPersonal::class, 'employee_id');
    }
    public function socialassprattachments()
    {
        return $this->hasMany(SocialAssPrAttachment::class, 'employee_id');
    }
    public function extracurriculams()
    {
        return $this->hasMany(Extracurriculam::class, 'employee_id');
    }
    public function publications()
    {
        return $this->hasMany(Publication::class, 'employee_id');
    }
    public function awards()
    {
        return $this->hasMany(Award::class, 'employee_id');
    }
    public function otherservicejobs()
    {
        return $this->hasMany(OtherServiceJob::class, 'employee_id');
    }
    public function languages()
    {
        return $this->hasMany(Language::class, 'employee_id');
    }

    public function criminalprosecutiones()
    {
        return $this->hasMany(CriminalProsecutione::class, 'employee_id');
    }
    public function criminalprodisciplinaries()
    {
        return $this->hasMany(CriminalProsecutione::class, 'employee_id');
    }
    public function acrmonitorings()
    {
        return $this->hasMany(AcrMonitoring::class, 'employee_id');
    }


    
    public static function generateEmployeeid($class)
    {

    
        $prefix = '2201';
        $classDigit = [
            '1st' => '1',
            '2nd' => '2',
            '3rd' => '3',
            '4th' => '4'
        ][$class] ?? '0';


        $currentMax = [
            '1st' => 0,
            '2nd' => 10000,
            '3rd' => 20000,
            '4th' => 50000
        ][$class];
       
        $maxId = self::where('employeeid', 'like', $prefix . $classDigit . '%')
                      ->max('employeeid');

        if ($maxId) {
            $currentMax = (int) substr($maxId, 5);
        }

        $newId = $prefix . $classDigit . str_pad($currentMax + 1, 5, '0', STR_PAD_LEFT);

        // Ensure uniqueness
        while (self::where('employeeid', $newId)->exists()) {
            $currentMax++;
            $newId = $prefix . $classDigit . str_pad($currentMax + 1, 5, '0', STR_PAD_LEFT);
        }

        return $newId;
    }
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($employee) {
    //         $employee->employeeid = self::generateEmployeeId($employee->class);
    //     });
    // }
    
}
