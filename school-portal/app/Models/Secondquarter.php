<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondquarter extends Model
{
    use HasFactory;

    protected $table ='secondquarter';
    protected $fillable = [

        'mothertongue2',
            'filipino2',
            'english2',
            'mathematics2',
            'science2',
            'ap2',
            'esp2',
            'music2',
            'arts2',
            'pe2',
            'health2',
            'epp2',
            'tle2',
            'user_id',
            'average2',
        ];

           // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }
}
