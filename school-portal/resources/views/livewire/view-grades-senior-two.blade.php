@foreach ($data as $datas)
   
    @endforeach

<div>

  <div >
      <h1 class="flex items-center justify-center text-2xl mb-10">My Grades</h1>
  <div class="overflow-auto pl-2 pr-2">
  <table class="table-auto w-full mb-6  dark:bg-[#222738]">
      <thead>
          <tr>
              <th class="px-4 py-2">SECOND QUARTER</th>
            
          </tr>
      </thead>
      <tbody class="ml-2 mr-2">

        
            <tr >
                <td class="border px-4 py-2  dark:border-gray-500">Oral Communication</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->oral}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Reading and Writing</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->reading}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->komunikasyon}}</td> 
            </tr>


            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->pagbasa}}</td>    
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">21st Century Literature from the Philippines and the World</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->century}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Contemporary Philippine Arts from the Regions</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->contemporary}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Media and Information Literacy</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->media}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">General Math</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->math}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Statistics and Probability</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->statistics}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Earth and Life Science</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->earth}}</td>  
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Physical Science</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->science}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Introduction to the Philosophy of the Human Person</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->philosophy}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Physical Education and Health</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->health}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Personal Development</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->personal}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Understanding Culture, Society and Politics</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->culture}}</td>
            </tr>

            

            <tr>
                <td class="border px-4 py-2 font-bold dark:border-gray-500">Average</td>
                <td class="border px-4 py-2 font-bold dark:border-gray-500"> {{$datas->average}}</td>
            </tr>
       
       
        
      </tbody>
  </table>
  </div>
  </div>

  @include('sweetalert::alert')
</div>
