<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondquarter extends Model
{
    use HasFactory;

    protected $table ='secondquarter';
    protected $fillable = [

        'mothertongue',
            'filipino',
            'english',
            'mathematics',
            'science',
            'ap',
            'esp',
            'music',
            'arts',
            'pe',
            'health',
            'epp',
            'tle',
            'user_id',
            'average',
        ];

           // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }
}
