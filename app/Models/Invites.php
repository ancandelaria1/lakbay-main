<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Invites extends Model
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
        'riderType',
        'firstName',
        'lastName',
        'gender',
        'mobileNumber',
    ];

    protected $dates = ['created_at', 'updated_at'];

}
