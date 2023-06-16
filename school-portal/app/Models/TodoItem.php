<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;
    protected $table ='todo_items';
    protected $fillable = ['student_id', 'title', 'completed'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
