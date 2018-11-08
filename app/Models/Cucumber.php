<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Cucumber
 * @package App\Models
 * @property float price
 * @property string color
 * @property Country country
 * @property boolean isSmooth
 */
class Cucumber extends Model
{
    public function country() {
        return $this->belongsTo('App\Models\Country');
    }

    public function smooth() {
        return $this->belongsTo('App\Models\Smooth', 'is_smooth');
    }
}
