<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function getYear() {
        return substr($this->date, 0 , 4);
    }
}
