<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    //
    protected $table = 'portofolio_1144'; 

    protected $fillable = [
    'full_name', 
    'title', 
    'phone', 
    'summary', 
    'experience', 
    'education', 
    'skills'
];
}
