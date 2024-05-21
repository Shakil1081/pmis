<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use Auditable, HasFactory;

    public $table = 'languages';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'employee_id',
        'language',
        'read_id',
        'write_id',
        'speak_id',
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

    public function read()
    {
        return $this->belongsTo(LanguageProficiency::class, 'read_id');
    }

    public function write()
    {
        return $this->belongsTo(LanguageProficiency::class, 'write_id');
    }

    public function speak()
    {
        return $this->belongsTo(LanguageProficiency::class, 'speak_id');
    }
}
