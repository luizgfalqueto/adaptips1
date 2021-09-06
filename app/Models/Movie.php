<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title','genre','id_country','release','synopsis','rating','image'];
    
    public function country()
    {
        return $this->belongsTo(Country::class,'id_country');
    }
}
