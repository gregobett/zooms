@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FIRST QUARTER****************************************** --}}
<div class="flex justify-center items-center w-full bg-white overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">First Quarter</h1>
      <form action="{{url('save-firstquarter-senior')}}" method="post" enctype="multipart/form-data" id="my-form">
        @csrf
        {{-- <input type="hidden" value="{{ $data->$id }}" name="id" /> --}}
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="oral">Oral Communication</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="oral" id="oral" >
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="reading">Reading and Writing</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="reading" id="reading">
          </div>
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900" for="komunikasyon">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="komunikasyon" id="komunikasyon">
          </div>
          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900" for="pagbasa">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pagbasa" id="pagbasa">
          </div>
          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900" for="century">21st Century Literature from the Philippines and the World</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="century" id="century">
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="contemporary">Contemporary Philippine Arts from the Regions</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="contemporary" id="contemporary">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="media">Media and Information Literacy</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="media" id="media">
        </div>
        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900" for="math">General Math</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="math" id="math">
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900" for="statistics">Statistics and Probability</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="statistics" id="statistics">
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900" for="earth">Earth and Life Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="earth" id="earth">
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900" for="science">Physical Science</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science" id="science">
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900" for="philosophy">Introduction to the Philosophy of the Human Person</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="philosophy" id="philosophy">
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900" for="health">Physical Education and Health</label>
          <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="health" id="health">
      </div>
      <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="personal">Personal Development</label>
        <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="personal" id="persoanl">
    </div>
    <div class="flex flex-col mb-2">
        <label class="text-sm text-gray-900" for="culture">Understanding Culture, Society and Politics</label>
        <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="culture" id="culture">
    </div>
          {{-- <div class="flex flex-col mb-4">
              <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
              <input class="border py-2 px-3 text-grey-800" type="file" name="file" id="file">
          </div> --}}
        
          
          <button class="block bg-gre hover:bg-blue-700 text-white uppercase text-sm mx-auto p-1 rounded" id="btn-submit" type="submit" >Save</button>
      </form>
  </div>
</div>


@endsection