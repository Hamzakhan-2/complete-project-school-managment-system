<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;
    protected $fillable=['parent_id','teacher_id','date','time','reqularity','othermetrics'];

    public function parent()
    {

        return $this->belongsTo(Parents::class);
    }
    public function teacher()
    {
      return $this->belongsTo(Teacher::class);

    }
}
