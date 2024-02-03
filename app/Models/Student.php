<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['parent_id','name','age'];

    public function parent(){

        return $this->belongsTo(Parents::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    // Student model
// public function parent()
// {
//     return $this->belongsTo(User::class, 'parent_id');
// }

}
