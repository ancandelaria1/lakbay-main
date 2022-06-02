<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Trips extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'trips';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        '_userid', /* login email as key */
        'groupId',
        'riderType',
        'firstName',
        'lastName',
        'gender',
        'mobileNumber',
        'commChannel',
        'originAddress',
        'departureTime',
        'destinationAddress',
        'arrivalTime',
        'frequency'.
        'facebook',
        'instagram',
        'linkedin',
        'emailAddress',
        'workInterests',
        'travelInterests',

    ];

    protected $dates = ['created_at', 'updated_at'];

}
