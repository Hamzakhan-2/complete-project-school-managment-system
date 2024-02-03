<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;
    protected $fillable=['parent_id','student_id','bus_number','location','detail'];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
