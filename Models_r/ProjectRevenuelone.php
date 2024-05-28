<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRevenuelone extends Model
{
    use HasFactory;

    public $table = 'project_revenuelones';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'project_revenue_id',
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

    public function project_revenue()
    {
        return $this->belongsTo(Joininginfo::class, 'project_revenue_id');
    }
}
