<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    
    public $fillable=['name','province','salary'];
    
    Protected $dates = ['deleted_at'];
}
