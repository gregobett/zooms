@extends('layouts.home')

@section('content')	





@foreach($stud as $student)

{{-- <h1>{{$student->average1}}</h1>
<h1>{{$student->average2}}</h1>
<h1>{{$student->average3}}</h1>
<h1>{{$student->average4}}</h1> --}}

@endforeach

<div class="flex items-center justify-center">
    <img src="/images/logo.png" width="150">
</div>
<div class="flex flex-col items-center justify-center ">
<h1 class="flex items-center text-sm md:text-xl justify-center font-extrabold mb-2 ">Tipas Integrated National Highschool</h1>

    {{-- <p class="flex items-center text-sm md:text-xl  justify-center mb-8 mt-0">Tipas San Juan, Batangas</p> --}}
</div>

<div class="overflow-auto pl-2 pr-2">
    
  <div >
    <h1 class="flex items-center justify-center text-xl mb-10">Final Grades</h1>
<div class="overflow-auto pl-2 pr-2 flex items-center justify-center">
    <table class="table-auto w-full mb-6 text-xs md:text-base dark:bg-[#222738]">
        <thead>
            <tr>
                {{-- <th class="px-4 py-2"></th>
                <th class="px-4 py-2">MTB</th>
                <th class="px-4 py-2">Fil</th>
                <th class="px-4 py-2">Eng</th>
                <th class="px-4 py-2">Math</th>
                <th class="px-4 py-2">Sci</th>
                <th class="px-4 py-2">AP</th>
                <th class="px-4 py-2">ESP</th>
                <th class="px-4 py-2">Mus</th>
                <th class="px-4 py-2">Arts</th>
                <th class="px-4 py-2">PE</th>
                <th class="px-4 py-2">Hel</th>
                <th class="px-4 py-2">EPP</th>
                <th class="px-4 py-2">TLE</th>
                <th class="px-4 py-2">Average</th> --}}
                <th class="border px-4 py-2"></th>
                <th class="border px-4 py-2">1</th>
                <th class="border px-4 py-2">2</th>
                <th class="border px-4 py-2">3</th>
                <th class="border px-4 py-2">4</th>
                <th class="border px-4 py-2">Final Grade</th>
              
            </tr>
        </thead>
        <tbody class="ml-2 mr-2 ">
             
            
            {{-- @foreach($stud as $student) --}}
              <tr >
                  {{-- <td class="border px-4 py-2  dark:border-gray-500">First Quarter</td>
                   
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mothertongue}}</td>  
               
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->filipino}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->english}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mathematics}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->science}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->ap}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->esp}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->music}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->arts}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->pe}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->health}}</td>
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->epp}}</td>    
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->tle}}</td>  
                  <td class="flex items-center justify-center border px-4 py-2 font-bold dark:border-gray-500">{{$student->average1}}</td>   --}}
                  <td class="border px-4 py-1  dark:border-gray-500 ">Mother Toungue</td>
                  <td class="border px-4 py-1 dark:border-gray-500 ">{{$student->mothertongue}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->mothertongue2}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->mothertongue3}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->mothertongue4}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->mothertongue +$student->mothertongue2 + $student->mothertongue3 + $student->mothertongue4)/4)}}</td>  
              </tr>

            <tr >
              <td class="border px-4 py-1 dark:border-gray-500">Filipino</td>
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino2}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino3}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino4}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->filipino +$student->filipino2 + $student->filipino3 + $student->filipino4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">English</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->english +$student->english2 + $student->english3 + $student->english4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Math</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->mathematics +$student->mathematics2 + $student->mathematics3 + $student->mathematics4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Science</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->science +$student->science2 + $student->science3 + $student->science4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Araling Panlipunan</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->ap +$student->ap2 + $student->ap3 + $student->ap4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">ESP</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->esp +$student->esp2 + $student->esp3 + $student->esp4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Music</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->music +$student->music2 + $student->music3 + $student->music4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Arts</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->arts +$student->arts2 + $student->arts3 + $student->arts4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Physical Education</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->pe +$student->pe2 + $student->pe3 + $student->pe4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Health</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->health +$student->health2 + $student->health3 + $student->health4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">EPP</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->epp +$student->epp2 + $student->epp3 + $student->epp4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">TLE</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->tle +$student->tle2 + $student->tle3 + $student->tle4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500 font-bold">General Average</td>
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500 font-bold">
                    
                    {{number_format(($student->tle +$student->tle2 + $student->tle3 + $student->tle4 +
                    $student->epp +$student->epp2 + $student->epp3 + $student->epp4 +
                    $student->health +$student->health2 + $student->health3 + $student->health4 +
                    $student->pe +$student->pe2 + $student->pe3 + $student->pe4 +
                    $student->arts +$student->arts2 + $student->arts3 + $student->arts4 +
                    $student->music +$student->music2 + $student->music3 + $student->music4 +
                    $student->esp +$student->esp2 + $student->esp3 + $student->esp4 +
                    $student->ap +$student->ap2 + $student->ap3 + $student->ap4 +
                    $student->science +$student->science2 + $student->science3 + $student->science4 +
                    $student->mathematics +$student->mathematics2 + $student->mathematics3 + $student->mathematics4 +
                    $student->english +$student->english2 + $student->english3 + $student->english4 +
                    $student->filipino +$student->filipino2 + $student->filipino3 + $student->filipino4 +
                    $student->mothertongue +$student->mothertongue2 + $student->mothertongue3 + $student->mothertongue4

                    )/52)}} 
                   
                </td>  
            </tr>


  
              {{-- <tr>
                  <td class="border px-4 py-2 dark:border-gray-500">Second Quarter</td>
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mothertongue2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->filipino2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->english2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mathematics2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->science2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->ap2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->esp2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->music2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->arts2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->pe2}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->health2}}</td>
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->epp2}}</td>    
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->tle2}}</td>  
                  <td class="flex items-center justify-center border px-4 py-2 font-bold dark:border-gray-500">{{$student->average2}}</td>
              </tr>
  
              <tr>
                  <td class="border px-4 py-2 dark:border-gray-500">Third Quarter</td>
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mothertongue3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->filipino3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->english3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mathematics3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->science3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->ap3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->esp3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->music3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->arts3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->pe3}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->health3}}</td>
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->epp3}}</td>    
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->tle3}}</td>  
                  <td class="flex items-center justify-center border px-4 py-2 font-bold  dark:border-gray-500">{{$student->average3}}</td> 
              </tr>
  
  
              <tr class=''>
                  <td class="border px-4 py-2 dark:border-gray-500">Fourth Quarter</td>
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mothertongue4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->filipino4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->english4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->mathematics4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->science4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->ap4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->esp4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->music4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->arts4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->pe4}}</td>  
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->health4}}</td>
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->epp4}}</td>    
                  <td class="border px-4 py-2 dark:border-gray-500">{{$student->tle4}}</td>  
                  <td class="flex items-center justify-center border px-4 py-2 font-bold dark:border-gray-500">{{$student->average4}}</td>    
              </tr> --}}

              {{-- <tr>
                <td class="border font-bold px-4 py-2 dark:border-gray-500 text-blue-700" >General Average</td>
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>
                <td class="border px-4 py-2 dark:border-gray-500"></td>    
                <td class="border px-4 py-2 dark:border-gray-500"></td>  
                <td class="border px-4 py-2 dark:border-gray-500"></td>
                <td class="flex items-center justify-center border px-4 py-2  font-bold text-blue-700 dark:border-gray-500" colspan='15'>{{number_format(($student->average1 +$student->average2 + $student->average3 + $student->average4)/4)}} </td>
            </tr> --}}
            {{-- @endforeach --}}
             
         
          
        </tbody>
    </table>
   </div>




@endsection