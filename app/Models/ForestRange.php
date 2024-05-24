<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForestRange extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'forest_ranges';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'forest_state_id',
        'forest_division_bbs_code',
        'status_id',
        'forest_division_id',
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

    public function forest_state()
    {
        return $this->belongsTo(ForestState::class, 'forest_state_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function forest_division()
    {
        return $this->belongsTo(Division::class, 'forest_division_id');
    }
}
