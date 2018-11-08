<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Smooth extends Model
{
    public function cucumber() {
        return $this->hasOne('App\Models\Cucumber', 'is_smooth');
    }
}
