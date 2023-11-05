<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Respondent extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'gender',
        'age_id',
        'education_id',
        'job',
        'service_type_id',
    ];

    public function answers(): HasMany
    {
        return $this->hasMany(RespondentAnswer::class);
    }
}
