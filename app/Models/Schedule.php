<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Schedule extends Model
{
    use HasUuids;

    protected $table = 'Schedule';
	public $incrementing = false;
	public $keyType = "string";

	protected $fillable = [
        'routeId',
        'departureTime',
        'arrivalTime',
        'dayOfWeek',
    ];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function routes()
    {
        return $this->hasMany(Route::class, 'operatorId');
    }
}
