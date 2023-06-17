



<div class="flex items-center shadow lg:ml-36 lg:mr-36 xl:ml-64 xl:mr-64 ">

<div class="bg-white rounded shadow p-6 m-4 w-full dark:bg-gray-800 ">
    <h1 class="flex text-grey-darkest lg:text-3xl mb-8 font-bold text-center">TODO LIST</h1>
        <form wire:submit.prevent="addTodo" class="mb-12 ">
            <div class="flex mt-4 ">
                <input type="text" wire:model="title" class="shadow appearance-none w-full text-xs lg:text-lg md:text-md py-2 text-grey-darker" placeholder="Add Todo">
                <button type="submit" class=" pl-2 pr-2 md:pl-12 md:pr-12 text-white border-teal bg-gre hover:text-white hover:bg-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>
        </form>

        <ul>
            @foreach($todos as $todo)
                <li  wire:key="{{ $todo->id }}">
                    <div class="flex mt-4"> 

                        <div class="p-0 lg:p-2 w-full  shadow-md pl-2">
                            <input type="checkbox" wire:click="toggleCompletion({{ $todo->id }})" {{ $todo->completed ? 'checked' : '' }}>
                            <span class="w-full text-grey-darkest text-sm  lg:pl-2 uppercase ">{{ $todo->title }}</span>
                        </div>

                        <div>
                            <button class="flex-no-shrink p-1 md:p-2 ml-2 shadow-md border-2 rounded-lg text-white border-red bg-red-800 hover:text-white hover:bg-red-900" wire:click="delete({{ $todo->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 
                                    1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 
                                    2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 
                                    1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 
                                    0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
</div>

</div>