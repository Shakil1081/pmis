<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CriminalProsecutionDerail extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'criminal_prosecution_derails';

    protected $dates = [
        'govt_order_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'criminal_prosecution_id',
        'govt_order_no',
        'govt_order_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function criminal_prosecution()
    {
        return $this->belongsTo(CriminalProsecutione::class, 'criminal_prosecution_id');
    }

    public function getGovtOrderDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setGovtOrderDateAttribute($value)
    {
        $this->attributes['govt_order_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
