<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Stop extends Model
{
    use HasUuids;

    protected $table = 'Stop';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'type',
    ];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function routes()
    {
        return $this->hasMany(StopRoute::class, 'stopId');
    }
}
