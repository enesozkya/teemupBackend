<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
 

class GamesModel extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'gameCollection';
    protected $primaryKey = '_id';
    
    //
}
