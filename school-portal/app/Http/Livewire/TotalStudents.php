<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Faculty;

class TotalStudents extends Component
{

    public $students;
    public $totalStudents;
    public $totalMaleStudents;
    public $totalFemaleStudents;
    public $faculties;
    public $totalFaculties;


    public function render()
    {

        $this->students = Student::all();
        $this->totalStudents = Student::count();
        $this->faculties = Faculty::all();
        $this->totalFaculties = Faculty::count();
        $this->totalMaleStudents = Student::where('gender', 'male')->count();
        $this->totalFemaleStudents = Student::where('gender', 'female')->count();
        return view('livewire.total-students');
    }
}
