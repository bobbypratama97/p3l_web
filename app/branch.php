<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
  protected $table = 'branch';
  protected $primaryKey = 'IdBranch';
  public $timestamps = false;
  protected $fillable = [
      'Name',
      'City',
      'Address',
      'PhonenUmber'
  ];
}
