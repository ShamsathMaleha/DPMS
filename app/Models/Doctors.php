<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $guarded= [];


    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function docSpecialist()
    {
        return $this->belongsTo(Specialist::class,'specialist_id','id');
    }

    public function reviews(){

        return $this->hasMany(Review::class,'doctor_id','id');
    }

}
