<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sensor;

class MeasuredValue extends Model
{   
    protected $fillable = ['szenzor_id', 'mert_ertek'];
    public function sensor() {
        return $this->hasOne(Sensor::class);
    }
    use HasFactory;
}
