<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class StopRoute extends Model
{
    use HasUuids;

    protected $table = 'StopRoute';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'routeId',
        'stopId',
        'stopOrder',
    ];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function route()
    {
        return $this->belongsTo(Route::class, 'routeId');
    }

    public function stop()
    {
        return $this->belongsTo(Stop::class, 'stopId');
    }
}
