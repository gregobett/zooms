@foreach ($data as $datas)
   
    @endforeach


<div>

  <div >
      <h1 class="flex items-center justify-center text-2xl mb-10 ">My Grades</h1>
      
  <div class="overflow-auto pl-2 pr-2">
  <table class="table-auto w-full mb-6  dark:bg-[#222738]">
      <thead >
          <tr >
              <th class=" px-4 py-2">FIRST QUARTER </th>
      
          </tr>
      </thead>
      <tbody class="ml-2 mr-2">

        
            <tr >
                <td class="border px-4 py-2  dark:border-gray-500">Mother Tongue</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->mothertongue}}</td>     
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Filipino</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->filipino}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">English</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->english}}</td>
            </tr>


            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Mathematics</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->mathematics}}</td>    
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Science</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->science}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Araling Panlipunan</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->ap}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Edukasyon sa Pagpapahalaga</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->esp}}</td>    
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Music</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->music}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Arts</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->arts}}</td> 
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Physical Education</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->pe}}</td>   
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Health</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->health}}</td>
            </tr>

            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Edukasyon sa Pagpapahalaga at Pagpapakatao</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->epp}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 dark:border-gray-500">Technology and Livelihood Education</td>
                <td class="border px-4 py-2 dark:border-gray-500">{{$datas->tle}}</td>
            </tr>

            
            <tr>
                <td class="border px-4 py-2 font-bold dark:border-gray-500">Average</td>
                <td class="border px-4 py-2 font-bold dark:border-gray-500">{{$datas->average1}} </td>
            </tr>
       
       
        
      </tbody>
  </table>
  </div>
  </div>

  @include('sweetalert::alert')
</div>