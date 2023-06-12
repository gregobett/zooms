@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FIRST QUARTER****************************************** --}}
<div class="flex justify-center items-center w-full bg-white overflow-hidden " >

  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4 ">

  <div class="flex flex-col justify-center items-center text-center ">
 
                <div class="max-w-sm font-bold font-sans text-lg">
            
                    You are a Junior Highschool Student
                </div>
                <div class="font-semibold max-w-lg mt-5 text-sm">
                These are your subjects. Just click the save button to save this subject for the fourth quarter
               
                </div>
              
            </div>
          
      <form action="{{url('save-fourthquarter')}}" method="post" enctype="multipart/form-data"  id="my-form">
        @csrf
  
        {{-- <input type="hidden" value="{{ $data->$id }}" name="id" /> --}}

        <div class=" lg:flex  mb-2 mt-6">

        <div class="lg:mr-6 ">
          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="mothertongue">Mother Tongue4</label>
            
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mothertongue4" id="mothertongue4" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900 bg-white shadow-xl text-lg p-4" for="filipino4">Filipino</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="filipino4" id="filipino4" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="english4">English</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="english4" id="english4" hidden>
       
          </div>

          <div class="flex flex-col mb-2">
              <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="mathematics4">Mathematics</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="mathematics4" id="mathematics4" hidden>
          </div>

          <div class="flex flex-col mb-2">
              <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="science4">Science</label>
              <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="science4" id="science4" hidden>
          </div>

          <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="ap4">Araling Panlipunan</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="ap4" id="ap4" hidden>
        </div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="esp4">Edukasyon sa Pagpapakatao</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="esp4" id="esp4" hidden>
        </div>

        </div>

        <div>

        <div class="flex flex-col mb-2">
            <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="music4">Music</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="music4" id="music4" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="arts4">Arts</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="arts4" id="arts4" hidden>
        </div>
        <div class="flex flex-col mb-2">
            <label class="text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="pe4">Physical Educataion</label>
            <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="pe4" id="pe4" hidden>
        </div>

        <div class="flex flex-col mb-2">
          <label class="  text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="health4">Health</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="health4" id="health4" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class=" text-sm text-gray-900  bg-white shadow-xl text-lg p-4" for="epp4">Edukasyon Pantahanan at Pangkabuhayan</label>
          <input value="0" class="border py-0 px-3 text-grey-800" type="text" name="epp4" id="epp4" hidden>
      </div>
      <div class="flex flex-col mb-2">
          <label class="text-sm text-gray-900v bg-white shadow-xl text-lg p-4" for="tle4">Technology and Livelihood Education</label>
          <input value="0" class="border py-0 px-3 text-grey-800 mb-2" type="text" name="tle4" id="tle4" hidden>
      </div>

    </div>
</div>
     
          
       
          <div class="flex justify-center">
            <button class='mt-12 relative bg-gre text-white p-2 pl-12 pr-12 rounded-lg  hover:bg-red-900  text-xl font-bold overflow-hidden shadow-2xl' id="btn-submit" type="submit">
                Save Fourth Quarter Subject
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