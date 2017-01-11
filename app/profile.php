<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'user_first_name', 'user_last_name', 'user_grade', 'user_age', 'user_gender','user_id', 'subjects', 'sports', 'atrs'
    ];
}
