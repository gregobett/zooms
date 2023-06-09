@extends('layouts.home')
@section('content')	

<div>

  <div >
      <h1 class="flex items-center justify-center text-2xl mb-10">My Grades</h1>
  <div class="overflow-auto pl-2 pr-2">
  <table class="table-auto w-full mb-6  dark:bg-[#222738]">
      <thead>
          <tr>
              <th class="px-4 py-2">FOURTH QUARTER</th>
            
          </tr>
      </thead>
      <tbody class="ml-2 mr-2">

        
            <tr >
                <td class="border px-4 py-2  dark:border-gray-500">Oral Communication</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->oral4}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Reading and Writing</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->reading4}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->komunikasyon4}}</td> 
            </tr>


            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->pagbasa4}}</td>    
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">21st Century Literature from the Philippines and the World</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->century4}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Contemporary Philippine Arts from the Regions</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->contemporary4}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Media and Information Literacy</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->media4}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">General Math</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->math4}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Statistics and Probability</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->statistics4}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Earth and Life Science</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->earth4}}</td>  
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Physical Science</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->science4}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Introduction to the Philosophy of the Human Person</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->philosophy4}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Physical Education and Health</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->health4}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Personal Development</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->personal4}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Understanding Culture, Society and Politics</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->culture4}}</td>
            </tr>

            

            <tr>
                <td class="border px-4 py-2 font-bold dark:border-gray-500">Average</td>
                <td class="border px-4 py-2 font-bold dark:border-gray-500"> {{$data->average4}}</td>
            </tr>
       
       
        
      </tbody>
  </table>
  </div>
  </div>

  @include('sweetalert::alert')
</div>

@endsection