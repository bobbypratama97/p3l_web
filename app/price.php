<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    protected $table = 'price';
    protected $primaryKey = 'IdPrice';
    protected $fillable = ['IdPrice','PriceNominal'];
    public $timestamps = false;

}
