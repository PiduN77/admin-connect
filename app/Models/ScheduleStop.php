<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ScheduleStop extends Model
{
    use HasUuids;

    protected $table = 'ScheduleStop';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'scheduleId',
        'arrivalTime',
        'departureTime',
    ];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'scheduleId');
    }
}
