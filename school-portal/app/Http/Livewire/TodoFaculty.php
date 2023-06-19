<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoTeacher;
use Illuminate\Support\Facades\Auth;


class TodoFaculty extends Component
{
    public $todos;
    public $title;

    public function mount()
    {
        $user = Auth::user();
        $this->todos = TodoTeacher::where('faculty_id', $user->id)->get();
    }


    public function render()
    {
        return view('livewire.todo-faculty');
    }


    public function addTodo()
    {
        $this->validate([
            'title' => 'required',
        ]);

        $user = Auth::user();

        TodoTeacher::create([
            'faculty_id' => $user->id,
            'title' => $this->title,
        ]);

        $this->title = '';
        $this->mount(); // Refresh the to-do list after adding a new item
    }

    public function toggleCompletion($itemId)
    {
        $item = TodoTeacher::find($itemId);
        $item->completed = !$item->completed;
        $item->save();

        $this->mount(); // Refresh the to-do list after updating completion status
    }

    public function delete($itemId)
    {
        TodoTeacher::destroy($itemId);

        $this->mount(); // Refresh the to-do list after deleting an item
    }
}
