<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sensor;

class Installment extends Model
{
    protected $fillable = ['uzem_id', 'nev'];
    public $timestamps = false;
    public function sensor()
    {
        return $this->belongsTo(Sensor::class);
    }

    public function plant()
    {
        return $this->hasOne(Plant::class);
    }
    use HasFactory;
}
