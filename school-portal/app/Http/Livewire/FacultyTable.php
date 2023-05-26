<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Faculty;

use Livewire\Component;

class FacultyTable extends Component
{
    use withPagination;

    public $perPage = 10;

    public $search = '';

    public $orderBy = 'id';

    public $orderAsc = true; 

    public function render()
    {
        return view('livewire.faculty-table',[
            'teachers' => Faculty::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            -> simplePaginate($this->perPage),
        ]);
    }
}
