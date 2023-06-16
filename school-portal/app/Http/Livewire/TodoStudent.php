<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoItem;
use Illuminate\Support\Facades\Auth;

class TodoStudent extends Component
{

    public $todos;
    public $title;

    public function mount()
    {
        $user = Auth::user();
        $this->todos = TodoItem::where('student_id', $user->id)->get();
    }

    public function render()
    {
        return view('livewire.todo-student');
    }

    public function addTodo()
    {
        $this->validate([
            'title' => 'required',
        ]);

        $user = Auth::user();

        TodoItem::create([
            'student_id' => $user->id,
            'title' => $this->title,
        ]);

        $this->title = '';
        $this->mount(); // Refresh the to-do list after adding a new item
    }

    public function toggleCompletion($itemId)
    {
        $item = TodoItem::find($itemId);
        $item->completed = !$item->completed;
        $item->save();

        $this->mount(); // Refresh the to-do list after updating completion status
    }

    public function delete($itemId)
    {
        TodoItem::destroy($itemId);

        $this->mount(); // Refresh the to-do list after deleting an item
    }
}
