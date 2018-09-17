<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialrequest extends Model
{
    //
    protected $table = 'IdSpecialRequest';
    protected $primaryKey = 'IdSpecialRequest';
    public $timestamps = false;
    protected $fillable = [
      'IdDetailBooking',
      'IdPaidService',
      'Quantity',
      'Detail'
  ];

}
