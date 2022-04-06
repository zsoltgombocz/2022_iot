<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MeasuredValues;
use App\Models\Installment;

class Sensor extends Model
{
    protected $fillable = ['berendezes_id', 'nev'];
    public $timestamps = false; 
    public function measuredvalues() {
        return $this->belongsTo(MeasuredValue::class);
    }

    public function installment() {
        return $this->hasOne(Installment::class);
    }
    use HasFactory;
}
