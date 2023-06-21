

 
 <div class="pl-2 pr-2 shadow-xl">
    <div class="w-full flex flex-col lg:flex-row  pb-10 ">
        <div class="w-full lg:w-3/6 mx-0 mb-2 lg:pr-2">
            <label class="text-sm">Search</label>
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full mr-2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg"  placeholder="Search Teacher...">
        </div>
        <div class="w-full  lg:w-1/6  mx-0 mb-2 lg:pr-2">
            <label class="text-sm">Filter by</label>
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg" id="grid-state">
                <option value="id">ID</option>
                <option value="lastname">Last Name</option>
                <option value="email">Email</option>
                {{-- <option value="created_at">Sign Up Date</option> --}}
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class= "w-full lg:w-1/6 mx-0 mb-2 lg:pr-2">
            <label class="text-sm">Sort by</label>
            <select wire:model="orderAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-full lg:w-1/6  mx-0 ">
            <label class="text-sm">Display by</label>
            <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg" id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>
    <div class="overflow-auto">
    <table class="table-auto w-full mb-6">
        <thead>
            <tr>
                <th class="px-4 py-2">PHOTO</th>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">LAST NAME</th>
                <th class="px-4 py-2">FIRST NAME</th>
                <th class="px-4 py-2">MIDDLE NAME</th>
                <th class="px-4 py-2">GENDER</th>
                <th class="px-4 py-2">EMAIL</th>
                <th class="px-4 py-2">DATE OF BIRTH</th>
                <th class="px-4 py-2">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>

                    <td class="border px-4 py-2 rounded-full dark:border-gray-500">
                        <a href="{{url('edit-faculty/'.$teacher->id)}}"><img src="{{asset('uploads/faculty/'.$teacher->photo)}}" width="30" height="30" alt="image" class="border rounded-full"></a>
                    </td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->id }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->lastname }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->firstname }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->middlename}}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->gender }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->email }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->dateofbirth}}</td>
                    <td class="flex items-center border px-4 py-2 dark:border-gray-500">
                    
                     
                    
                        <a href="{{url('edit-faculty/'.$teacher->user_id)}}" type="button" class="p-1 md:p-2 ml-2 shadow-md border-2 rounded-lg text-white border-blue bg-blue-600 hover:text-white hover:bg-blue-900">  
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>

                            </a>
                        
                

                        <a href="{{url('delete-faculty/'.$teacher->user_id)}}" onclick="confirmation(event)" type="button" class="p-1 md:p-2 ml-2 shadow-md border-2 rounded-lg text-white border-red bg-red-800 hover:text-white hover:bg-red-900"> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            </a>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    {!! $teachers->links() !!}
    @include('sweetalert::alert')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this data",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>