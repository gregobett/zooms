@extends('layouts.home')
@section('content')	

<div>

  <div >
      <h1 class="flex items-center justify-center text-2xl mb-10">My Grades</h1>
  <div class="overflow-auto pl-2 pr-2">
  <table class="table-auto w-full mb-6  dark:bg-[#222738]">
      <thead>
          <tr>
              <th class="px-4 py-2">THIRD QUARTER</th>
            
          </tr>
      </thead>
      <tbody class="ml-2 mr-2">

        
            <tr >
                <td class="border px-4 py-2  dark:border-gray-500">Mother Tongue</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->mothertongue3}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Filipino</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->filipino3}}</td> 
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">English</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->english3}}</td>
            </tr>


            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Mathematics</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->mathematics3}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Science</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->science3}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Araling Panlipunan</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->ap3}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Edukasyon sa Pagpapahalaga</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->esp3}}</td>    
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Music</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->music3}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Arts</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->arts3}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Physical Education</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->pe3}}</td>  
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Health</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->health3}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Edukasyon sa Pagpapahalaga at Pagpapakatao</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->epp3}}</td> 
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Technology and Livelihood Education</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$data->tle3}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 font-bold dark:border-gray-500">Average</td>
                {{-- <td class="border px-4 py-2 font-bold dark:border-gray-500">{{number_format(($data->mothertongue + $data->filipino + $data->english + $data->mathematics + $data->science + $data->ap + $data->esp + $data->music + $data->arts + $data->pe + $data->health + $data->epp + $data->tle)/13)}} </td> --}}
                <td class="border px-4 py-2 font-bold dark:border-gray-500">{{$data->average3}} </td>
            </tr>
       
       
        
      </tbody>
  </table>
  </div>
  </div>

  @include('sweetalert::alert')
</div>

@endsection