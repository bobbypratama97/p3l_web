<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
  protected $table = 'history';
  protected $primaryKey = 'IdHistory';
  protected $fillable = ['IdUser','IdBooking'];

  public function user() {
  return $this->belongsToMany('App\user');}

  public function reservation() {
  return $this->belongsToMany('App\reservation');}
}
