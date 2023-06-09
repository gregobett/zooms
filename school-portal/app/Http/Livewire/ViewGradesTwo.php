<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class ViewGradesTwo extends Component
{

    public $data;
    

    public function mount()
    {
        $this->data = DB::table('secondquarter')->get();

        
    }

    public function render()
    {
        return view('livewire.view-grades-two');
    }
}
