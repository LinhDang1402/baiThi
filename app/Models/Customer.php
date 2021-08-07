<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    public $timestamps = false;
    
    public function getNameGenderAttribute()
    {
        if ($this-> genDer ==1){
            return "Nam";
        }else{
            return "Nữ";
        }
    }
}
