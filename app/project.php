<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['title','description','start_date','end_date','language','technology','ide','document','presentation','image'];
}
