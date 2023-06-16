



<div class="flex items-center xl:ml-36 xl:mr-36">

<div class="bg-white rounded shadow p-6 m-4 w-full ">
    <h1 class="text-grey-darkest">Todo List</h1>
        <form wire:submit.prevent="addTodo" class="mb-12 ">
            <div class="flex mt-4">
                <input type="text" wire:model="title" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                <button type="submit" class=" pl-12 pr-12  border-2 rounded text-teal border-teal hover:text-white hover:bg-gray-500">Add</button>
            </div>
        </form>

        <ul>
            @foreach($todos as $todo)
                <li  wire:key="{{ $todo->id }}">
                    <div class="flex mt-4"> 

                        <div class=" p2 w-full">
                            <input type="checkbox" wire:click="toggleCompletion({{ $todo->id }})" {{ $todo->completed ? 'checked' : '' }}>
                            <span class="w-full text-grey-darkest  pl-2 uppercase ">{{ $todo->title }}</span>
                        </div>

                        <div>
                            <button class="flex-no-shrink p-1 pl-4 pr-4 ml-2 border-2 rounded-lg text-white border-red bg-red-800 hover:text-white hover:bg-red-900" wire:click="delete({{ $todo->id }})">Delete</button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
</div>

</div>