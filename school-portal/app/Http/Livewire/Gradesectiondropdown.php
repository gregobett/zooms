<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grade;
use App\Models\Section;

class Gradesectiondropdown extends Component
{
    
    public $grades;
    public $sections;
    public $selectedSection = NULL;
    public $selectedGrade = NULL;



    public function mount($initialGradeId = null, $initialSectionName = null)
{
    $this->grades = Grade::all();

    if (!is_null($initialGradeId)) {
        $this->sections = Section::where('grade_id', $initialGradeId)->get();
        $this->selectedGrade = $initialGradeId;
        $this->selectedSection = $initialSectionName;
    } else {
        $this->sections = collect();
        $this->selectedGrade = null;
        $this->selectedSection = null;
    }
}
    
    
    
    public function render()
    {
        return view('livewire.gradesectiondropdown', [
            'grades' => $this->grades,
            'sections' => $this->sections,
        ]);
    }


    public function updatedSelectedGrade($grade)
    {
        if (!is_null($grade)) {
            $this->sections = Section::where('grade_id', $grade)->get();
        } else {
            $this->sections = collect();
        }
        $this->selectedSection = NULL; // Reset the selected section when the grade changes
    }
}
