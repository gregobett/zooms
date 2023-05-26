{{-- 
<div class="flex items-center justify-center">
<h2>Hello It's me {{ $data->name }}</h2> 
<br>
    
<strong>User details: </strong><br>
<strong>Name: </strong>{{ $data->name }} <br>
<p><strong>Email: </strong>{{ $data->email }}</p> <br>
<p><strong>Phone: </strong>{{ $data->phone }} </p><br>
<p><strong>Subject: </strong>{{ $data->subject }} </p><br>
<strong>Message: </strong>{{ $data->message }} <br><br>
  
Thank you

</div> --}}




<div class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 keychainify-checked"></div>
    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hello It's me {{ $data->name }}</h1>
    <p class="font-normal text-gray-700 dark:text-gray-400">Email: </strong>{{ $data->email}}.</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Phone: </strong>{{ $data->phone }}.</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Subject: </strong>{{ $data->subject}}.</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">Promise to comply the following: </strong>{{ $data->message }}.</p>


Thank you