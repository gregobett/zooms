<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table ='students';
    protected $fillable = [

        'lastname',
        'firstname',
        'middlename',
        'dateofbirth',
        'gender',
        'religion',
        'grade',
        'section',
        'nationality',
        'email',
        'phone',
        'fathersname',
        'foccupation',
        'mothersname',
        'moccupation',
        'address',
        'photo',
        'user_id'
    ];

    // relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


  

  

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('lastname', 'like', '%'.$search.'%')
                ->orWhere('firstname', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%')
                ->orWhere('section', 'like', $search);
    }


        // relationship with firstquarter
        public function firstquarter(){
            return $this->hasMany(Firstquarter::class, 'user_id');
                
        }
       
    
         // relationship with secondquarter
         public function Secondquarter(){
            return $this->hasMany(Secondquarter::class, 'user_id');
                
        }
    
      
            public function Thirdquarter(){
                return $this->hasMany(Thirdquarter::class, 'user_id');
                    
            }
    
    
            public function Fourthquarter(){
            return $this->hasMany(Fourthquarter::class, 'user_id');
                
        }


         public function firstquartersenior(){
            return $this->hasMany(Firstquartersenior::class, 'user_id');
                
        }
       
    

         public function Secondquartersenior(){
            return $this->hasMany(Secondquartersenior::class, 'user_id');
                
        }
    

            public function Thirdquartersenior(){
                return $this->hasMany(Thirdquartersenior::class, 'user_id');
                    
            }
    

            public function Fourthquartersenior(){
            return $this->hasMany(Fourthquartersenior::class, 'user_id');
                
        }
    



}
