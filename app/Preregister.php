<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preregister extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'f_name','l_name','grade','field','phone','mobile','district','father_mobile','mother_mobile','school',
        'average','in_touch','filler'
    ];
}
