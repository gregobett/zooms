<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thirdquartersenior extends Model
{
    use HasFactory;
    protected $table ='Thirdquartersenior';
    protected $fillable = [

        'oral3',
        'reading3',
        'komunikasyon3',
        'pagbasa3',
        'century3',
        'contemporary3',
        'media3',
        'math3',
        'statistics3',
        'earth3',
        'science3',
        'philosophy3',
        'health3',
        'personal3',
        'culture3',
        'average3',
        'user_id',
            

    ];

    
      // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }

}
