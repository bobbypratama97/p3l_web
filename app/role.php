<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
  protected $table = 'role';
  protected $primaryKey = 'IdRole';
  public $timestamps = false;
  protected $fillable = [
     'IdRole',
     'roleName',
     'detail'
  ];

}
