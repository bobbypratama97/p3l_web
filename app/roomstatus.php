<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomstatus extends Model
{
    protected $table = 'roomstatus';
    protected $primaryKey = 'IdRoomStatus';
    protected $fillable = ['IdRoomType','IdRoom','Status','StartDate','EndDate'];

}
