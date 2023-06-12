@extends('layouts.home')
@section('content')



<div class="flex justify-center items-center w-full bg-white overflow-hidden dark:bg-slate-700" >

  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4 ">

  <div class="flex flex-col justify-center items-center text-center ">
 
                <div class="max-w-sm font-bold font-sans text-lg text-gray-900">
            
                    You are a Senior Highschool Student
                </div>
                <div class="font-semibold max-w-lg mt-5 text-sm text-gray-900">
                These are your subjects. Just click the save button to save this subject for the third quarter
               
                </div>
              
            </div>
          
      <form action="{{url('save-thirdquarter-senior3')}}" method="post" enctype="multipart/form-data"  id="my-form">
        @csrf
  
        {{-- <input type="hidden" value="{{ $data->$id }}" name="id" /> --}}

        <div class=" lg:flex  mb-2 mt-6">

        <div class="lg:mr-6 ">
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="oral3">Oral Communication</label>
            
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="oral3" id="oral3" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="reading3">Reading and Writing</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="reading3" id="reading3" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="komunikasyon3">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="komunikasyon3" id="komunikasyon3" hidden>
       
          </div>

          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="pagbasa3">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pagbasa3" id="pagbasa3" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="century3">21st Century Literature from the Philippines and the World</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="century3" id="century3" hidden>
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="contemporary3">Contemporary Philippine Arts from the Regions</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="contemporary3" id="contemporary3" hidden>
        </div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="media3">Media and Information Literacy</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="media3" id="media3" hidden>
        </div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="math3">General Math</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="math3" id="math3" hidden>
        </div>

        </div>

        <div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="statistics3">Statistics and Probability</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="statistics3" id="statistics3" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="earth3">Earth and Life Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="earth3" id="earth3" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="science3">Physical Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science3" id="science3" hidden>
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="philosophy3">Introduction to the Philosophy of the Human Person</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="philosophy3" id="philosophy3" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="health3">Physical Education and Health</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health3" id="health3" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="personal3">Personal Development</label>
          <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="personal3" id="personal3" hidden>
      </div>

      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="culture3">Understanding Culture, Society and Politics</label>
          <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="culture3" id="culture3" hidden>
      </div>

    </div>
</div>
     
          
       
          <div class="flex justify-center">
            <button class='mt-12 relative bg-gre text-white p-2 pl-12 pr-12 rounded-lg  hover:bg-red-900  text-xl font-bold overflow-hidden shadow-2xl' id="btn-submit" type="submit">
                Save Third Quarter Subject
                <div class="ribbon bg-red-500  text-sm whitespace-no-wrap px-4">Save</div>
            </button>
            </div>
      </form>
  </div>
</div>




<style>
  .ribbon {
    position: absolute;
    top: 0;
    right: 0;
    width: 150px;
    height: 22px;
    margin-right: -50px;
    margin-top: 15px;
    -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Safari prior 9.0 */
    transform: rotate(45deg); /* Standard syntax */
  }
</style>

@endsection