<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    protected $fillable = [
        'id',
        'lastname',
        'middlename',
        'firstname',
        'sitio',
        'houseno',
        'barangay',
        'gender',
        'mcattle',
        'fcattle',
        'mcarabao',
        'fcarabao',
        'mcanine',
        'fcanine',
        'mfeline',
        'ffeline',
        'fattener',
        'breeder',
        'phen',
        'prooster',
        'drake',
        'duck',
        'buck',
        'doe',
        'grooster',
        'ghen',
        'mnative',
        'fnative',
        'latitude',
        'longitude',
        'img',
        'admin_id'  
    ];
}
