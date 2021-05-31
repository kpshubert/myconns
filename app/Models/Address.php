<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['street1',
                           'street2',
                           'city',
                           'st',
                           'zip',
                           'county',
                           'country',
                           'userid',
                           'effectivedate',
                           'enddate'
                         ];
}
