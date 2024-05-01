<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addressdetaile extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'addressdetailes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STATUS_SELECT = [
        'Active'   => 'Active',
        'Inactive' => 'Iinactive',
    ];

    public const ADDRESS_TYPE_SELECT = [
        'Present'   => 'Present',
        'Permanent' => 'Permanent',
    ];

    protected $fillable = [
        'employee_id',
        'address_type',
        'flat_house',
        'road_no',
        'village_town',
        'post_office',
        'post_code',
        'thana_upazila_id',
        'district_id',
        'phone_number',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function employee()
    {
        return $this->belongsTo(EmployeeList::class, 'employee_id');
    }

    public function thana_upazila()
    {
        return $this->belongsTo(Upazila::class, 'thana_upazila_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
