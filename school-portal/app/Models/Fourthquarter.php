<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourthquarter extends Model
{
    use HasFactory;

    protected $table ='fourthquarter';
    protected $fillable = [

        'mothertongue4',
            'filipino4',
            'english4',
            'mathematics4',
            'science4',
            'ap4',
            'esp4',
            'music4',
            'arts4',
            'pe4',
            'health4',
            'epp4',
            'tle4',
            'user_id',
            'average4',
        ];

    // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }
}
