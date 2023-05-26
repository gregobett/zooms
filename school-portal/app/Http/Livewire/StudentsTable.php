<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Student;
use Livewire\Component;

class StudentsTable extends Component
{
    use withPagination;

    public $perPage = 10;

    public $search = '';

    public $orderBy = 'id';

    public $orderAsc = true; 

    public function render()
    {
        return view('livewire.students-table',[
            'students' => Student::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            -> simplePaginate($this->perPage),
        ]);
        // return view('livewire.students-table');
    }
}
