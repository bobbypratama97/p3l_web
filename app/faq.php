<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $table = 'faq';
    protected $primaryKey = 'IdFaq';
    public $timestamps = false;
    protected $fillable = [
        'IdFaq',
        'Question',
        'Answer'
    ];
}
