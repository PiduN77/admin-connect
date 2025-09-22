<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Operator extends Model
{
    use HasUuids;

    protected $table = 'Operator';
	public $incrementing = false;
	public $keyType = "string";

	protected $fillable = [
		'name',
		'contactInfo',
	];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function routes()
    {
        return $this->hasMany(Route::class, 'operatorId');
    }
}
