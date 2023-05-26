<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourthquartersenior extends Model
{
    use HasFactory;
    protected $table ='Fourthquartersenior';
    protected $fillable = [

        'oral',
        'reading',
        'komunikasyon',
        'pagbasa',
        'century',
        'contemporary',
        'media',
        'math',
        'statistics',
        'earth',
        'science',
        'philosophy',
        'health',
        'personal',
        'culture',
        'average',
        
            

    ];

    
      // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }

}
