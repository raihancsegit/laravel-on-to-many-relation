<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
