<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondquartersenior extends Model
{
    use HasFactory;
    protected $table ='secondquartersenior';
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
        'user_id',
            

    ];

    
      // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }

}
