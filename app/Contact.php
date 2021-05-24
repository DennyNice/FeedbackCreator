<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
 // Не будет полей updated add, created at в базе данных
    public $timestamps =false;
}
