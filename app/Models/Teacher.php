<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=['name','email','password','phone_number','address','academic','courserecord'];

    public function requestmeeting()
    {
        return $this->hasMany(RequestMeeting::class);
    }
    public function attendence()
    {

        return $this->hasMany(Attendence::class);
    }

}
