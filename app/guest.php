<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
  protected $table = 'guest';
  protected $primaryKey = 'IdGuest';
  protected $fillable = [
    'FirstName',
    'LastName',
    'InstitutionName',
    'IdentityNumber',
    'PhoneNumber',
    'EmailAddress',
    'Address'
  ];

  public $timestamps = false;
}
