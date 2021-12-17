<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['text','url','photo_url'];

    protected $table = 'slides';
}
