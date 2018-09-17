<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomtype extends Model
{
    //
    protected $table = 'roomtype';
    protected $primaryKey = 'IdRoomType';
    protected $fillable = ['IdPrice','RoomName','RoomFacility','Smoking','RoomDetail','ImageLink'];
    public $timestamps = false;

    public function price()
    {
        return $this->belongsTo('price', 'IdPrice');
    }

}
