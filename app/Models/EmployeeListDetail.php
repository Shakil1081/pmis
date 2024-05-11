<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeListDetail extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'employee_list_details';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'general_information_id',
        'education_informatione',
        'professionale',
        'addressdetailes',
        'emergence_contactes',
        'spouse_informatione',
        'children',
        'job_historie',
        'employee_promotion',
        'leave_records',
        'service_particular',
        'trainings',
        'travel_records',
        'foreign_travel_personals',
        'social_ass_pr_attachments',
        'publications',
        'awards',
        'other_service_jobs',
        'languages',
        'criminal_prosecutiones',
        'criminalpro_disciplinaries',
        'acr_monitorings',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function general_information()
    {
        return $this->belongsTo(EmployeeList::class, 'general_information_id');
    }
}
