<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'head', 'body','link'
    ];
    protected $dates = ['deleted_at'];
}
