<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;
    protected $fillable=['name','email','password','phoneno','address','profile_picture'];

    public function  student(){

        return $this->hasMany(Student::class);
    }

    public function requestmeeting()
    {
        return $this->hasMany(RequestMeeting::class);
    }
     public function attendence()
    {
    return $this->hasMany(Attendence::class);
    }
    public function parent()
    {
        return $this->hasMany(Parents::class);
    }



    public function students()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }


}
