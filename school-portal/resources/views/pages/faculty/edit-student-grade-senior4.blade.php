@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FOURTH QUARTER****************************************** --}}
<h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6>
<div class="flex justify-center items-center w-full bg-white overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Fourth Quarter</h1>
      <form action="{{url('update-fourthquarter-senior')}}" method="post" enctype="multipart/form-data" id="my-form">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="oral4">Oral Communication</label>
              <input value="{{$data->oral4}}" class="border py-0 px-3 text-grey-800" type="text" name="oral4" id="oral4" >
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="reading4">Reading and Writing</label>
              <input value="{{$data->reading4}}" class="border py-0 px-3 text-grey-800" type="text" name="reading4" id="reading4">
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="komunikasyon4">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
              <input value="{{$data->komunikasyon4}}" class="border py-0 px-3 text-grey-800" type="text" name="komunikasyon4" id="komunikasyon4">
          </div>
          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900" for="pagbasa4">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</label>
              <input value="{{$data->pagbasa4}}" class="border py-0 px-3 text-grey-800" type="text" name="pagbasa4" id="pagbasa4">
          </div>
          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900" for="century4">21st Century Literature from the Philippines and the World</label>
              <input value="{{$data->century4}}" class="border py-0 px-3 text-grey-800" type="text" name="century4" id="century4">
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="contemporary4">Contemporary Philippine Arts from the Regions</label>
            <input value="{{$data->contemporary4}}" class="border py-0 px-3 text-grey-800" type="text" name="contemporary4" id="contemporary4">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="media4">Media and Information Literacy</label>
            <input value="{{$data->media4}}" class="border py-0 px-3 text-grey-800" type="text" name="media4" id="media4">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="math4">General Math</label>
            <input value="{{$data->math4}}" class="border py-0 px-3 text-grey-800" type="text" name="math4" id="math4">
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="statistics4">Statistics and Probability</label>
            <input value="{{$data->statistics4}}" class="border py-0 px-3 text-grey-800" type="text" name="statistics4" id="statistics4">
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="earth4">Earth and Life Science</label>
            <input value="{{$data->earth4}}" class="border py-0 px-3 text-grey-800" type="text" name="earth4" id="earth4">
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="science4">Physical Science</label>
          <input value="{{$data->science4}}" class="border py-0 px-3 text-grey-800" type="text" name="science4" id="science4">
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="philosophy4">Introduction to the Philosophy of the Human Person</label>
          <input value="{{$data->philosophy4}}" class="border py-0 px-3 text-grey-800" type="text" name="philosophy4" id="philosophy4">
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="health4">Physical Education and Health</label>
          <input value="{{$data->health4}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="health4" id="health4">
      </div>
      <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="personal4">Personal Development</label>
        <input value="{{$data->personal4}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="personal4" id="persoanl4">
    </div>
    <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="culture4">Understanding Culture, Society and Politics</label>
        <input value="{{$data->culture4}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="culture4" id="culture4">
    </div>
          {{-- <div class="flex flex-col mb-4">
              <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
              <input class="border py-2 px-3 text-grey-800" type="file" name="file" id="file">
          </div> --}}
        
          <div class="flex-between items-center justify-center">
            <button class="block w-full bg-gre  text-white text-sm mx-auto p-1 hover:text-amber-700 rounded py-1.5 mb-2 px-5" type="submit">Save</button>
            <a href="{{url('edit-student-faculty/'.$data->user_id )}}" type="btn" class="bg-gre text-sm  text-slate-50  hover:text-amber-700 border-gray-200 rounded py-1 px-5 shadow-lg flex  justify-center">Back</a>
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