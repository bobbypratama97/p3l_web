<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailreservation extends Model
{
    protected $table = 'detailreservation';
    protected $primaryKey = 'IdDetailBooking';
    public $timestamps = false;
    protected $fillable = [
      'IdBooking',
      'IdPaidService',
      'CheckInDate',
      'CheckOutDate',
      'AdultQuantity',
      'KidsQuantity',
      'RoomName',
      'RoomQuantity',
      'UnitPrice',
      'TotalPrice'
  ];

    
}
