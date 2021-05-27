<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
     public $fillable = ['firstname', 'lastname', 'email','phone','firm_id', ];
        public function Firm(){
        return $this->belongsTo('App\Models\Firm');
}
}
