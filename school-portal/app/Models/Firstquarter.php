<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firstquarter extends Model
{
    use HasFactory;

    protected $table ='firstquarter';
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
            'average1',
            'user_id',
         
      
            

    ];


      // relationship to Student
      public function students()
      {
          return $this->belongsTo(Student::class, 'user_id');
      }


      

  


}
