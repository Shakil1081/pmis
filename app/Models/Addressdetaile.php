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

    public const STATUS_SELECT = [
        'No'  => 'No',
        'Yes' => 'Yes',
    ];
    public const STATUS_SELECTBN = [
        'No'  => 'না',
        'Yes' => 'হ্যাঁ',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const ADDRESS_TYPE_SELECT = [
        'Present'   => 'Present',
        'Permanent' => 'Permanent',
    ];
    public const ADDRESS_TYPE_SELECTBN = [
        'Present'   => 'বর্তমান ঠিকানা',
        'Permanent' => 'স্থায়ী ঠিকানা',
    ];

    protected $fillable = [
        'employee_id',
        'address_type',
        'flat_house',
        'post_office',
        'post_code',
        'thana_upazila_id',
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
}
