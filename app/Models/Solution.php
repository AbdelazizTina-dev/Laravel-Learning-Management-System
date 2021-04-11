<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    protected $fillable = ['answer','earned_points','student_name','student_email','evaluated'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
