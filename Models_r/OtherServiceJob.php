<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherServiceJob extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'other_service_jobs';

    protected $dates = [
        'from',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'employer',
        'address',
        'service_type',
        'position',
        'from',
        'to',
        'employee_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getFromAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFromAttribute($value)
    {
        $this->attributes['from'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function employee()
    {
        return $this->belongsTo(EmployeeList::class, 'employee_id');
    }
}
