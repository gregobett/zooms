<div class="flex items-center pb-8  text-gray-800">
  <div class="p-4 w-full">

    <div class="grid grid-cols-12 gap-4">

  
      <div class="col-span-12 sm:col-span-6   xl:col-span-3 ">
        <div class="flex flex-row bg-white shadow-sm rounded p-4 shadow-xl dark:bg-gray-800 dark:text-gray-200">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          </div>
          <div class="flex flex-col flex-grow ml-4 ">
            <div class="text-sm text-gray-500  dark:text-gray-200">Total Students</div>
            <div class="font-bold text-lg">{{ $totalStudents }}</div>
          </div>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6   xl:col-span-3">
        <div class="flex flex-row bg-white shadow-sm rounded p-4 shadow-xl dark:bg-gray-800 dark:text-gray-200">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500 dark:text-gray-200">Total Faculties</div>
            <div class="font-bold text-lg">{{ $totalFaculties }}</div>
          </div>
        </div>
      </div>

   

      <div class="col-span-12 sm:col-span-6   xl:col-span-3">
        <div class="flex flex-row bg-white shadow-sm rounded p-4 shadow-xl dark:bg-gray-800 dark:text-gray-200">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500 dark:text-gray-200">Total Male Students</div>
            <div class="font-bold text-lg">{{ $totalMaleStudents }}</div>
          </div>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6  xl:col-span-3">
        <div class="flex flex-row bg-white shadow-sm rounded p-4 shadow-xl dark:bg-gray-800 dark:text-gray-200">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500 dark:text-gray-200">Total Female Students</div>
            <div class="font-bold text-lg">{{ $totalFemaleStudents }}</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

