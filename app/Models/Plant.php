<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Installment;

class Plant extends Model
{
    protected $fillable = ['nev'];
    public $timestamps = false; 
    public function installment() {
        return $this->belongsTo(Installment::class);
    } 
    use HasFactory;
}
