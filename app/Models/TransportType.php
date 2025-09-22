<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class TransportType extends Model
{
    use HasUuids;

    protected $table = 'TransportType';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'description',
    ];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function routes()
    {
        return $this->hasMany(Route::class, 'transportTypeId');
    }
}
