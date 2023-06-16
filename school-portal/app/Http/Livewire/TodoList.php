<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos;
    public $title;

    public function mount()
    {
        $this->todos = Todo::all();
    }

    public function addTodo()
    {
        $this->validate([
            'title' => 'required',
        ]);

        Todo::create([
            'title' => $this->title,
        ]);

        $this->title = '';
        $this->todos = Todo::all();
    }

    public function toggleCompleted($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->completed = !$todo->completed;
        $todo->save();

        $this->todos = Todo::all();
    }

    public function deleteTodo($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();

        $this->todos = Todo::all();
    }


    public function render()
    {
        return view('livewire.todo-list');
    }
}
