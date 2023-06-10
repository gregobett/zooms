<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Firstquarter;
use App\Models\Secondquarter;
use App\Models\Thirdquarter;
use App\Models\Fourthquarter;
use Illuminate\Support\Facades\DB;

class Average extends Component
{



    public function render()
    {


        $stud = DB::table('students')
        ->join('firstquarter', 'students.user_id', '=', 'firstquarter.user_id')
        ->join('secondquarter', 'students.user_id', '=', 'secondquarter.user_id')
        ->join('thirdquarter', 'students.user_id', '=', 'thirdquarter.user_id')
        ->join('fourthquarter', 'students.user_id', '=', 'fourthquarter.user_id')
        ->select('firstquarter.*','secondquarter.*','thirdquarter.*','fourthquarter.*','firstquarter.average1', 'secondquarter.average2', 'thirdquarter.average3', 'fourthquarter.average4')
        ->where('students.user_id', '=', auth()->id())
        ->get();

        return view('livewire.average', [ 

            'stud' => $stud,
        ]);
    }
}
