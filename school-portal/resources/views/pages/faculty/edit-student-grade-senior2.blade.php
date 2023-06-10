@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************SECOND QUARTER****************************************** --}}
<h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6>
<div class="flex justify-center items-center w-full bg-white overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Second Quarter</h1>
      <form action="{{url('update-secondquarter-senior')}}" method="post" enctype="multipart/form-data" id="my-form">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="oral2">Oral Communication</label>
              <input value="{{$data->oral}}" class="border py-0 px-3 text-grey-800" type="text" name="oral2" id="oral2" >
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="reading2">Reading and Writing</label>
              <input value="{{$data->reading}}" class="border py-0 px-3 text-grey-800" type="text" name="reading2" id="reading2">
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="komunikasyon2">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
              <input value="{{$data->komunikasyon}}" class="border py-0 px-3 text-grey-800" type="text" name="komunikasyon2" id="komunikasyon2">
          </div>
          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900" for="pagbasa2">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</label>
              <input value="{{$data->pagbasa}}" class="border py-0 px-3 text-grey-800" type="text" name="pagbasa2" id="pagbasa2">
          </div>
          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900" for="century2">21st Century Literature from the Philippines and the World</label>
              <input value="{{$data->century}}" class="border py-0 px-3 text-grey-800" type="text" name="century2" id="century2">
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="contemporary2">Contemporary Philippine Arts from the Regions</label>
            <input value="{{$data->contemporary}}" class="border py-0 px-3 text-grey-800" type="text" name="contemporary2" id="contemporary2">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="media2">Media and Information Literacy</label>
            <input value="{{$data->media}}" class="border py-0 px-3 text-grey-800" type="text" name="media2" id="media2">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="math2">General Math</label>
            <input value="{{$data->math}}" class="border py-0 px-3 text-grey-800" type="text" name="math2" id="math2">
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="statistics2">Statistics and Probability</label>
            <input value="{{$data->statistics}}" class="border py-0 px-3 text-grey-800" type="text" name="statistics2" id="statistics2">
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="earth2">Earth and Life Science</label>
            <input value="{{$data->earth}}" class="border py-0 px-3 text-grey-800" type="text" name="earth2" id="earth2">
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="science2">Physical Science</label>
          <input value="{{$data->science}}" class="border py-0 px-3 text-grey-800" type="text" name="science2" id="science2">
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="philosophy2">Introduction to the Philosophy of the Human Person</label>
          <input value="{{$data->philosophy}}" class="border py-0 px-3 text-grey-800" type="text" name="philosophy2" id="philosophy2">
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="health2">Physical Education and Health</label>
          <input value="{{$data->health}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="health2" id="health2">
      </div>
      <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="personal2">Personal Development</label>
        <input value="{{$data->personal}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="personal2" id="persoanl2">
    </div>
    <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="culture2">Understanding Culture, Society and Politics</label>
        <input value="{{$data->culture}}" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="culture2" id="culture2">
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


@endsection