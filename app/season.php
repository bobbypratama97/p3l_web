<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class season extends Model
{
    //
    protected $table = 'season';
    protected $primaryKey = 'IdSeason';
    public $timestamps = false;
    protected $fillable = ['IdSeason',
                           'IdPrice',
                           'StartDate',
                           'EndDate',
                           'Detail'];

}
