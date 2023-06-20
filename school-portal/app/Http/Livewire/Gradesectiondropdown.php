<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grade;
use App\Models\Section;

class Gradesectiondropdown extends Component
{
    
    public $grades;
    public $sections;

    public $selectedGrade = NULL;


    public function mount()
    {
        $this->grades = Grade::all();
        $this->sections = collect();
    }
    
    
    
    public function render()
    {
        return view('livewire.gradesectiondropdown');
    }


    public function updatedSelectedGrade($grade)
    {
        if (!is_null($grade)) {
            $this->sections = Section::where('grade_id', $grade)->get();
        }else{
            $this->sections = collect();
        }
    }
}
