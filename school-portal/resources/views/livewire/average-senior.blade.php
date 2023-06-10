@foreach($stud as $student)



@endforeach

<div class="flex items-center justify-center">
    <img src="/images/logo.png" width="150">
</div>
<div class="flex flex-col items-center justify-center ">
<h1 class="flex items-center text-sm md:text-xl justify-center font-extrabold mb-2 ">Tipas Integrated National Highschool</h1>


</div>

<div class="overflow-auto pl-2 pr-2">
    
  <div >
    <h1 class="flex items-center justify-center text-xl mb-6 mt-4">Learning Progress and Achievement</h1>
<div class="overflow-auto pl-2 pr-2 flex items-center justify-center">
    <table class="table-auto w-full mb-6 text-xs md:text-base dark:bg-[#222738]">
        <thead>
            <tr>
            
                <th class="border px-4 py-2"></th>
                <th class="border px-4 py-2">1</th>
                <th class="border px-4 py-2">2</th>
                <th class="border px-4 py-2">3</th>
                <th class="border px-4 py-2">4</th>
                <th class="border px-4 py-2">Final Grade</th>
              
            </tr>
        </thead>
        <tbody class="ml-2 mr-2 ">
             
            
 
              <tr >

                  <td class="border px-4 py-1 dark:border-gray-500 ">Oral Communication</td>
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->oral}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->oral2}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->oral3}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->oral4}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->oral + $student->oral2 + $student->oral3 + $student->oral4)/4)}}</td>  
              </tr>

            <tr >
              <td class="border px-4 py-1 dark:border-gray-500">Reading and Writing</td>
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->reading}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->reading2}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->reading3}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->reading4}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->reading + $student->reading2 + $student->reading3 + $student->reading4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->komunikasyon}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->komunikasyon2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->komunikasyon3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->komunikasyon4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->komunikasyon +$student->komunikasyon2 + $student->komunikasyon3 + $student->komunikasyon4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pagbasa}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pagbasa2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pagbasa3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pagbasa4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->pagbasa +$student->pagbasa2 + $student->pagbasa3 + $student->pagbasa4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">21st Century Literature from the Philippines and the World</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->century}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->century2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->century3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->century4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->century +$student->century2 + $student->century3 + $student->century4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Contemporary Philippine Arts from the Regions</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->contemporary}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->contemporary2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->contemporary3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->contemporary4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->contemporary +$student->contemporary2 + $student->contemporary3 + $student->contemporary4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Media and Information Literacy</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->media}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->media2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->media3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->media4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->media +$student->media2 + $student->media3 + $student->media4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">General Math</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->math}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->math2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->math3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->math4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->math +$student->math2 + $student->math3 + $student->math4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Statistics and Probability</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->statistics}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->statistics2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->statistics3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->statistics4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->statistics +$student->statistics2 + $student->statistics3 + $student->statistics4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Earth and Life Science</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->earth}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->earth2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->earth3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->earth4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->earth +$student->earth2 + $student->earth3 + $student->earth4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Physical Science</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->science +$student->science2 + $student->science3 + $student->science4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Introduction to the Philosophy of the Human Person</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->philosophy}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->philosophy2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->philosophy3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->philosophy4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->philosophy +$student->philosophy2 + $student->philosophy3 + $student->philosophy4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Physical Education and Health</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->health +$student->health2 + $student->health3 + $student->health4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Personal Development</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->personal}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->personal2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->personal3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->personal4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->personal +$student->personal2 + $student->personal3 + $student->personal4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500">Understanding Culture, Society and Politics</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->culture}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->culture2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->culture3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->culture4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->culture +$student->culture2 + $student->culture3 + $student->culture4)/4)}}</td>  
            </tr>

            <tr >
                <td class="border px-4 py-1  dark:border-gray-500 font-bold">General Average</td>
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500"></td>  
                <td class="border px-4 py-1 dark:border-gray-500 font-bold">
                    
                    {{number_format(($student->culture +$student->culture2 + $student->culture3 + $student->culture4 +
                    $student->personal +$student->personal2 + $student->personal3 + $student->personal4 +
                    $student->health +$student->health2 + $student->health3 + $student->health4 +
                    $student->philosophy +$student->philosophy2 + $student->philosophy3 + $student->philosophy4 +
                    $student->science +$student->science2 + $student->science3 + $student->science4 +
                    $student->earth +$student->earth2 + $student->earth3 + $student->earth4 +
                    $student->statistics +$student->statistics2 + $student->statistics3 + $student->statistics4 +
                    $student->math +$student->math2 + $student->math3 + $student->math4 +
                    $student->media +$student->media2 + $student->media3 + $student->media4 +
                    $student->contemporary +$student->contemporary2 + $student->contemporary3 + $student->contemporary4 +
                    $student->century +$student->century2 + $student->century3 + $student->century4 +
                    $student->pagbasa +$student->pagbasa2 + $student->pagbasa3 + $student->pagbasa4 +
                    $student->komunikasyon +$student->komunikasyon2 + $student->komunikasyon3 + $student->komunikasyon4 +
                    $student->reading +$student->reading2 + $student->reading3 + $student->reading4 +
                    $student->oral +$student->oral2 + $student->oral3 + $student->oral4 

                    )/60)}} 
                   
                </td>  
            </tr>


  
             
         
          
        </tbody>
    </table>
   </div>
