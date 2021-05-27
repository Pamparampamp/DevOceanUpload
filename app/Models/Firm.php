<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    use HasFactory;
         protected $fillable = [
        'name', 'email', 'image','website',
    ];
    public function Workers(){
    return $this->hasMany('App\Models\Worker');
}
}
