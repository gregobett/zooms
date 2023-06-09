@foreach ($data as $datas)
   
    @endforeach

<div>

  <div >
      <h1 class="flex items-center justify-center text-2xl mb-10">My Grades</h1>
  <div class="overflow-auto pl-2 pr-2">
  <table class="table-auto w-full mb-6  dark:bg-[#222738]">
      <thead>
          <tr>
              <th class="px-4 py-2">SECOND QUARTER </th>
      
          </tr>
      </thead>
      <tbody class="ml-2 mr-2">

        
            <tr >
                <td class="border px-4 py-2  dark:border-gray-500">Mother Tongue</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->mothertongue2}}</td>     
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Filipino</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->filipino2}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">English</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->english2}}</td>
            </tr>


            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Mathematics</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->mathematics2}}</td>    
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Science</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->science2}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Araling Panlipunan</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->ap2}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Edukasyon sa Pagpapahalaga</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->esp2}}</td>    
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Music</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->music2}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Arts</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->arts2}}</td> 
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Physical Education</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->pe2}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Health</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->health2}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Edukasyon sa Pagpapahalaga at Pagpapakatao</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->epp2}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Technology and Livelihood Education</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->tle2}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 font-bold dark:border-gray-500">Average</td>
                <td class="border px-4 py-2 font-bold dark:border-gray-500">{{$datas->average2}} </td>
            </tr>
       
       
        
      </tbody>
  </table>
  </div>
  </div>

  @include('sweetalert::alert')
</div>