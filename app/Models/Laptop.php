<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Laptop extends Model
{
    use HasFactory;

    protected $table = "laptobs";
    protected $fillable = ['brand', 'price', 'color'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

}
