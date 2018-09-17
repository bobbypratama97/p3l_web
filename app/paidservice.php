<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paidservice extends Model
{
    protected $table = 'paidservice';
    protected $primaryKey = 'IdPaidService';
    public $timestamps = false;
    protected $fillable = [
      'IdPaidService',
      'PaidServiceName',
      'PaidServicePrice',
      'PaidServiceDetail'
    ];

}
