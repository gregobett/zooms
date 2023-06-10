<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Firstquartersenior;
use App\Models\Secondquartersenior;
use App\Models\Thirdquartersenior;
use App\Models\Fourthquartersenior;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class AverageSenior extends Component
{
    public function render()
    {


        $stud = DB::table('students')
        ->join('firstquartersenior', 'students.user_id', '=', 'firstquartersenior.user_id')
        ->join('secondquartersenior', 'students.user_id', '=', 'secondquartersenior.user_id')
        ->join('thirdquartersenior', 'students.user_id', '=', 'thirdquartersenior.user_id')
        ->join('fourthquartersenior', 'students.user_id', '=', 'fourthquartersenior.user_id')
        ->select('firstquartersenior.*','secondquartersenior.*','thirdquartersenior.*','fourthquartersenior.*','firstquartersenior.average', 'secondquartersenior.average2', 'thirdquartersenior.average3', 'fourthquartersenior.average4')
        ->where('students.user_id', '=', auth()->id())
        ->get();

        return view('livewire.average-senior', [ 

            'stud' => $stud,
        ]);
    }
}
