<?php

namespace Ingaflex\Entities;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'email',
    ];
}
