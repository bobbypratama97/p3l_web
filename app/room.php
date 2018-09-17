<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table = 'room';
    protected $primaryKey = 'IdRoom';
    protected $fillable = ['IdRoomType','IdBranch','Floor','Quantity','Smoking'];
}
