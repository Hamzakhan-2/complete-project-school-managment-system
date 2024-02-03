<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'notice_date',
        'publish_date',
        'messageto',

        'messagebox',
    ];
}
