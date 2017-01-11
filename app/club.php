<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    protected $fillable = [
        'name', 'teacher_name','room','meeting_time'
    ];
}
