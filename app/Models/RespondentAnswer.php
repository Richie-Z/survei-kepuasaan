<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RespondentAnswer extends Model
{
    protected $fillable = [
        'name'
    ];
}
