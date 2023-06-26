@extends('layouts.home')
@section('content')


    @foreach($querys as $query)
    <div class="p-10 flex flex-row bg-gray-200 dark:bg-gray-800 mb-8 rounded-md shadow-xl ml-8 mr-8 mt-8" >
      <!--Card 1-->
      <div class=" w-full lg:max-w-full items-center">
         
              <p class="text-gray-900 dark:text-gray-100  text-sm lg:text-xl">Title: <span class="font-semibold">{{$query->title}}</span></p>
  
              <p class="text-gray-800 dark:text-gray-300 font-normal text-sm lg:text-lg my-2 ">Details:  <span class="font-semibold">{{$query->message}}</span></p>

              <p class="text-gray-800 dark:text-gray-300 font-normal text-xs my-2 ">Posted:  {{$query->created_at->format('F j, Y g:i A')}}</p>
  
              <div class="flex justify-center">
                <img src="{{url('uploads/announcement/'.$query->photo)}}" alt="announcement photo" class="shadow-xl">
              </div>
  
      </div>
    </div>
    <hr class="mb-5 text-gray-900">
    @endforeach


    @yield('content')

  @include('sweetalert::alert')
@endsection
