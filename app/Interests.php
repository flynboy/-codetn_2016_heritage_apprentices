<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
	protected $table = 'Interests';
	
    protected $fillable = [
        'name', 'subname'
    ];
}
