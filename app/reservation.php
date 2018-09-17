<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table = 'reservation';
    protected $primaryKey = 'IdReservation';
    public $timestamps = false;
    protected $fillable = [
      'IdBooking',
      'IdUser',
      'IdBranch',
      'CreditCardOwner',
      'CreditCardNumber',
      'Credit',
      'Jaminan',
      'Deposit',
      'TransferReciept',
      'UserStatus'
  ];


  public function user()
      {
          return $this->belongsTo('user');
      }

  public function branch()
      {
          return $this->belongsTo('branch');
      }
}
