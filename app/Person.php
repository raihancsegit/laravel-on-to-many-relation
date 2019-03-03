<?php

namespace App;
//use App\Tiket;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public  function tiket(){
        return $this->hasOne(Tiket::class); //App\Tiket => Tiket::class
    }
}
