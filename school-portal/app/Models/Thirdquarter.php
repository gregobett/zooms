<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thirdquarter extends Model
{
    use HasFactory;

    protected $table ='thirdquarter';
    protected $fillable = [

        'mothertongue3',
            'filipino3',
            'english3',
            'mathematics3',
            'science3',
            'ap3',
            'esp3',
            'music3',
            'arts3',
            'pe3',
            'health3',
            'epp3',
            'tle3',
            'user_id',
            'average3',
        ];

               // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }
}
