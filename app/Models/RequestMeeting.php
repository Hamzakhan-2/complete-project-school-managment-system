<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestMeeting extends Model
{
    use HasFactory;

    protected $fillable=['parent_id','teacher_id','meeting_date','meeting_start_time','meeting_end_time','purpose','status'];


    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
}
