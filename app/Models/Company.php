<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laptop;

class Company extends Model {
         use HasFactory;


    protected $fillable = [ 'name', 'year'];

    public function laptops(){
        return $this->hasMany(Laptop::class);
    }

}
