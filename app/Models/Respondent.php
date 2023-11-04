<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
