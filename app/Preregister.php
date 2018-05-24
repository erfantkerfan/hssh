<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preregister extends Model
{
    protected $fillable = [
        'f_name','l_name','grade','field','phone','mobile'
    ];
}
