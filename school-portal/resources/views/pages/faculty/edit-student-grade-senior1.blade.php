@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FIRST QUARTER****************************************** --}}
{{-- <h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6> --}}
<div class="flex justify-center items-center w-full bg-white overflow-hidden dark:bg-[#222738]">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4 dark:bg-[#222738]">
      <h1 class="block w-full text-center text-gray-800 text-2xl dark:text-gray-300 font-bold mb-6">First Quarter</h1>
      <form action="{{url('update-firstquarter-senior')}}" method="post" enctype="multipart/form-data" id="my-form">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />

  
          <div class="flex  mb-4 shadow-lg">
              <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="oral">Oral Communication</label>
              <input value="{{$data->oral}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="oral" id="oral" >
          </div>
          
          <div class="flex  mb-4 shadow-lg">
              <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="reading">Reading and Writing</label>
              <input value="{{$data->reading}}" class="border py-0  w-24 dark:bg-gray-800 text-grey-800" type="text" name="reading" id="reading">
          </div>

          <div class="flex  mb-4 shadow-lg">
              <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="komunikasyon">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
              <input value="{{$data->komunikasyon}}" class="border py-0 w-24 dark:bg-gray-800  text-grey-800" type="text" name="komunikasyon" id="komunikasyon">
          </div>

          <div class="flex mb-4 shadow-lg">
              <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400  font-bold pr-2 text-sm text-gray-900" for="pagbasa">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</label>
              <input value="{{$data->pagbasa}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="pagbasa" id="pagbasa">
          </div>

          <div class="flex  mb-4 shadow-lg">
              <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="century">21st Century Literature from the Philippines and the World</label>
              <input value="{{$data->century}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="century" id="century">
          </div>

          <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-sm text-gray-900" for="contemporary">Contemporary Philippine Arts from the Regions</label>
            <input value="{{$data->contemporary}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="contemporary" id="contemporary">
        </div>

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-sm text-gray-900" for="media">Media and Information Literacy</label>
            <input value="{{$data->media}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="media" id="media">
        </div>

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-sm text-gray-900" for="math">General Math</label>
            <input value="{{$data->math}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="math" id="math">
        </div>
   

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="statistics">Statistics and Probability</label>
            <input value="{{$data->statistics}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="statistics" id="statistics">
        </div>

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="earth">Earth and Life Science</label>
            <input value="{{$data->earth}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="earth" id="earth">
        </div>

        <div class="flex  mb-4 shadow-lg">
          <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-sm text-gray-900" for="science">Physical Science</label>
          <input value="{{$data->science}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="science" id="science">
        </div>

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="philosophy">Introduction to the Philosophy of the Human Person</label>
            <input value="{{$data->philosophy}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="philosophy" id="philosophy">
        </div>

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="health">Physical Education and Health</label>
            <input value="{{$data->health}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800 " type="text" name="health" id="health">
        </div>

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="personal">Personal Development</label>
            <input value="{{$data->personal}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800 " type="text" name="personal" id="persoanl">
        </div>

        <div class="flex  mb-4 shadow-lg">
            <label class="w-full p-1 pl-2 bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-sm text-gray-900" for="culture">Understanding Culture, Society and Politics</label>
            <input value="{{$data->culture}}" class="border py-0 w-24 dark:bg-gray-800 text-grey-800" type="text" name="culture" id="culture">
        </div>
        
        
        <div class="flex-between items-center justify-center">
            <button class="block w-full bg-gre  text-white text-sm mx-auto p-1 hover:text-amber-700 rounded py-1.5 mb-2 px-5 dark:bg-[#222738] dark:shadow-xl border" type="submit">Save</button>
            <a href="{{url('edit-student-faculty/'.$data->user_id )}}" type="btn" class="bg-gre text-sm  text-slate-50  hover:text-amber-700 border-gray-200 rounded py-1 px-5 shadow-lg flex  justify-center dark:bg-[#222738] dark:shadow-xl border">Back</a>
        </div>
      </form>
  </div>
</div>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
        window.onpopstate = function () {
            location.reload();
        };
    }
</script>
@endsection