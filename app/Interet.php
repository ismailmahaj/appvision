<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Interet extends Model
{
    use Notifiable;
    protected $table = 'interets';
    
    public $timestamps = false;

}
