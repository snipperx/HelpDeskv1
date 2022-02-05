<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeSettings extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'destails'
    ];
}
