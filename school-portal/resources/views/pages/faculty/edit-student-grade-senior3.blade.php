@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************THIRD QUARTER****************************************** --}}
<h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6>
<div class="flex justify-center items-center w-full bg-white overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Third Quarter</h1>
      <form action="{{url('update-thirdquarter-senior')}}" method="post" enctype="multipart/form-data" id="my-form">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="oral3">Oral Communication</label>
              <input value="{{$data->oral3}}" class="border py-0 px-3 text-grey-800" type="text" name="oral3" id="oral3" >
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="reading3">Reading and Writing</label>
              <input value="{{$data->reading3}}" class="border py-0 px-3 text-grey-800" type="text" name="reading3" id="reading3">
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="komunikasyon3">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
              <input value="{{$data->komunikasyon3}}" class="border py-0 px-3 text-grey-800" type="text" name="komunikasyon3" id="komunikasyon3">
          </div>
          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900" for="pagbasa3">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</label>
              <input value="{{$data->pagbasa3}}" class="border py-0 px-3 text-grey-800" type="text" name="pagbasa3" id="pagbasa3">
          </div>
          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900" for="century3">21st Century Literature from the Philippines and the World</label>
              <input value="{{$data->century3}}" class="border py-0 px-3 text-grey-800" type="text" name="century3" id="century3">
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="contemporary3">Contemporary Philippine Arts from the Regions</label>
            <input value="{{$data->contemporary3}}" class="border py-0 px-3 text-grey-800" type="text" name="contemporary3" id="contemporary3">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="media3">Media and Information Literacy</label>
            <input value="{{$data->media3}}" class="border py-0 px-3 text-grey-800" type="text" name="media3" id="media3">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="math3">General Math</label>
            <input value="{{$data->math3}}" class="border py-0 px-3 text-grey-800" type="text" name="math3" id="math3">
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="statistics3">Statistics and Probability</label>
            <input value="{{$data->statistics3}}" class="border py-0 px-3 text-grey-800" type="text" name="statistics3" id="statistics3">
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="earth3">Earth and Life Science</label>
            <input value="{{$data->earth3}}" class="border py-0 px-3 text-grey-800" type="text" name="earth3" id="earth3">
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="science3">Physical Science</label>
          <input value="{{$data->science3}}" class="border py-0 px-3 text-grey-800" type="text" name="science3" id="science3">
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="philosophy3">Introduction to the Philosophy of the Human Person</label>
          <input value="{{$data->philosophy3}}" class="border py-0 px-3 text-grey-800" type="text" name="philosophy3" id="philosophy3">
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="health3">Physical Education and Health</label>
          <input value="{{$data->health3}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="health3" id="health3">
      </div>
      <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="personal3">Personal Development</label>
        <input value="{{$data->personal3}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="personal3" id="persoanl3">
    </div>
    <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="culture3">Understanding Culture, Society and Politics</label>
        <input value="{{$data->culture3}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="culture3" id="culture3">
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