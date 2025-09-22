<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Route extends Model
{
    use HasUuids;

    protected $table = 'Route';
	public $incrementing = false;
	public $keyType = "string";

	protected $fillable = [
		'name',
		'code',
		'description',
		'transportTypeId',
		'operatorId',
	];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function transportType()
    {
        return $this->belongsTo(TransportType::class, 'transportTypeId');
    }

    public function operator()
    {
        return $this->belongsTo(Operator::class, 'operatorId');
    }

    public function stops()
    {
        return $this->hasMany(StopRoute::class, 'routeId');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'routeId');
    }
}
