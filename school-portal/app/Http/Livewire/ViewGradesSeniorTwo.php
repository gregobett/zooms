<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ViewGradesSeniorTwo extends Component
{

    
    public $data;

    public function mount()
    {
        $this->data = DB::table('secondquartersenior')->get();
        
    }


    public function render()
    {
        return view('livewire.view-grades-senior-two');
    }
}
