<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Groups extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'groups';

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

    ];

    protected $dates = ['created_at', 'updated_at'];
}
