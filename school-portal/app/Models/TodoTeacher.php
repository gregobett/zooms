<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoTeacher extends Model
{
    use HasFactory;
    protected $table ='todo_teachers';
    protected $fillable = ['faculty_id', 'title', 'completed'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
