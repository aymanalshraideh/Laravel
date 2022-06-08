<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class car_model extends Model
{
    use HasFactory;
    protected $table='car_models';
    protected $primarykey='id';
    public function car(){
        return $this->belongsTo(car::class);
    }
}
