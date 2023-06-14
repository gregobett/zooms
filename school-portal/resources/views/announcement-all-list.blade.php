@extends('layouts.home')
@section('content')	

<div>

  <div>
      <h1 class="flex items-center font-bold justify-center text-2xl mb-10">LIST OF ALL ANNOUNCEMENT AND ACTIVITY</h1>
  <div class="overflow-auto">
  <table class="table-auto w-full mb-6  dark:bg-[#222738]">
      <thead>
          <tr>
              <th class="shadow-md px-4 py-2">PHOTO</th>
              <th class="shadow-md px-4 py-2">ID</th>
              <th class="shadow-md px-4 py-2">TITLE</th>
              <th class="shadow-md px-4 py-2">MESSAGE</th>
              <th class="shadow-md px-4 py-2">ACTION</th>
            
          </tr>
      </thead>
      <tbody >
          @foreach($data as $dat)
              <tr>

                  <td class="shadow-md px-4 py-2  flex items-center  justify-center dark:border-gray-500">
                      <a href="{{url('edit-announcement/'.$dat->id)}}"><img src="{{asset('uploads/announcement/'.$dat->photo)}}" width="32" height="32" alt="image" class="border  dark:border-gray-500 rounded-full"></a>
                  </td>
                  <td class="shadow-md px-4 py-2 dark:border-gray-500">{{ $dat->id}}</td>
                  <td class="shadow-md px-4 py-2 dark:border-gray-500">{{ $dat->title }}</td>
                  <td class="shadow-md px-4 py-2 dark:border-gray-500">{{ $dat->message}}</td>
                
                  <td class="shadow-md flex items-center justify-center px-4 py-2 dark:border-gray-500">
                  
                      <a href="{{url('edit-announcement/'.$dat->id)}}" >  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3F83F8" class="w-8 h-8 mr-2 ">
                          <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                          <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                      </svg>
                      </a>
                  

                      
                      <a href="{{url('delete-announcement/'.$dat->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F05252" class="w-6 h-6" >
                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                      </svg>
                      
                      </a>

                  </td>

                  {{-- <td class="border px-4 py-2">{{ $stud->created_at->diffForHumans() }}</td> --}}
              </tr>
          @endforeach
      </tbody>
  </table>
  </div>
  </div>

  @include('sweetalert::alert')
</div>

@endsection