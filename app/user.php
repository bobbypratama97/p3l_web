<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'IdUser';
    // public $timestamps = false;
    protected $fillable = [
      'IdType',
      'IdRole',
      'name',
      'email',
      'password'
      // 'FirstName',
      // 'LastName',
      // 'InstitutionName',
      // 'IdentityNumber',
      // // 'PhoneNumber',
      // 'EmailAddress',
      // 'Address',
      // 'Username',
      // 'Password'
    ];
  // protected $hidden = [
  //       'Password'
  //   ];


  public function usertype()
      {
          return $this->belongsTo('usertype');
      }

  public function role()
      {
          return $this->belongsTo('role', 'local_key', 'parent_key');
      }



}
