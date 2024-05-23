<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForestBeat extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'forest_beats';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'forest_range_id',
        'name_bn',
        'name_en',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function forest_range()
    {
        return $this->belongsTo(ForestRange::class, 'forest_range_id');
    }
}
