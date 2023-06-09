<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourthquartersenior extends Model
{
    use HasFactory;
    protected $table ='Fourthquartersenior';
    protected $fillable = [

        'oral4',
        'reading4',
        'komunikasyon4',
        'pagbasa4',
        'century4',
        'contemporary4',
        'media4',
        'math4',
        'statistics4',
        'earth4',
        'science4',
        'philosophy4',
        'health4',
        'personal4',
        'culture4',
        'average',
        
            

    ];

    
      // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }

}
