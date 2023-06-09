<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondquartersenior extends Model
{
    use HasFactory;
    protected $table ='Secondquartersenior';
    protected $fillable = [

        'oral2',
        'reading2',
        'komunikasyon2',
        'pagbasa2',
        'century2',
        'contemporary2',
        'media2',
        'math2',
        'statistics2',
        'earth2',
        'science2',
        'philosophy2',
        'health2',
        'personal2',
        'culture2',
        'average2',
        'user_id',
            

    ];

    
      // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }

}
