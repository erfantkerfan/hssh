<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educational extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'type','title','text','file','date'
    ];
}
