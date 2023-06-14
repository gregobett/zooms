@extends('layouts.home')
@section('content')



<div class="flex justify-center items-center w-full bg-white overflow-hidden dark:bg-slate-700" >

  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4 ">

  <div class="flex flex-col justify-center items-center text-center ">
 
                <div class="max-w-sm font-bold font-sans text-lg text-gray-900">
            
                    You are a Senior Highschool Student
                </div>
                <div class="font-semibold max-w-lg mt-5 text-sm text-gray-900">
                These are your subjects. Just click the save button to save this subject for the first quarter
               
                </div>
              
            </div>
          
      <form action="{{url('save-firstquarter-senior')}}" method="post" enctype="multipart/form-data"  id="my-form">
        @csrf
  
        {{-- <input type="hidden" value="{{ $data->$id }}" name="id" /> --}}

        <div class=" lg:flex  mb-2 mt-6">

        <div class="lg:mr-6 ">
          <div class="flex  mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="oral">Oral Communication</label>
            
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="oral" id="oral" >
          </div>

          <div class="flex  mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="reading">Reading and Writing</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="reading" id="reading">
          </div>

          <div class="flex  mb-2">
              <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="komunikasyon">Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="komunikasyon" id="komunikasyon" >
       
          </div>

          <div class="flex  mb-2">
              <label class=" text-sm text-gray-900  bg-white shadow-xl text-sm p-4" for="pagbasa">Pagbasa at Pagsusuri ng Iba't-Ibang Teksto Tungo sa Pananaliksik</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pagbasa" id="pagbasa" >
          </div>

          <div class="flex  mb-2">
              <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="century">21st Century Literature from the Philippines and the World</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="century" id="century" >
          </div>

          <div class="flex  mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="contemporary">Contemporary Philippine Arts from the Regions</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="contemporary" id="contemporary" >
        </div>

        <div class="flex  mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="media">Media and Information Literacy</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="media" id="media" >
        </div>

        <div class="flex  mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="math">General Math</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="math" id="math" >
        </div>

        </div>

        <div>

        <div class="flex  mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="statistics">Statistics and Probability</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="statistics" id="statistics" >
        </div>
        <div class="flex  mb-2">
            <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="earth">Earth and Life Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="earth" id="earth" >
        </div>
        <div class="flex  mb-2">
            <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="science">Physical Science</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science" id="science" >
        </div>

        <div class="flex mb-2">
          <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="philosophy">Introduction to the Philosophy of the Human Person</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="philosophy" id="philosophy">
      </div>
      <div class="flex  mb-2">
          <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="health">Physical Education and Health</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health" id="health" >
      </div>
      <div class="flex  mb-2">
          <label class="text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="personal">Personal Development</label>
          <input value="0" class="border-none py-0 px-3 text-grey-800 mb-2" type="text" name="personal" id="personal" >
      </div>

      <div class="flex  mb-2">
          <label class="text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="culture">Understanding Culture, Society and Politics</label>
          <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="culture" id="culture" >
      </div>

    </div>
</div>
     
          
       
          <div class="flex justify-center">
            <button class='mt-12 relative bg-gre text-white p-2 pl-12 pr-12 rounded-lg  hover:bg-red-900  text-xl font-bold overflow-hidden shadow-2xl' id="btn-submit" type="submit">
                Save First Quarter Subject
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