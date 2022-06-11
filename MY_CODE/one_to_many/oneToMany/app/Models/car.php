<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    // protected $table='cars';
    // protected $primarykey='id';
    // protected $fillable=['name','founded','description'];
    public function carModel(){
        return $this->hasMany(car_model::class,);
    }
}
