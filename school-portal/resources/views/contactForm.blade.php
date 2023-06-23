@extends('layouts.home')

@section('content')	




<!-- 
  <form method="POST" action="{{ route('contact.us.store') }}" class="space-y-8" id="contactUSForm">
    {{ csrf_field() }}
        <div class="flex items-center justify-center">
            <img src="/images/logo.webp" width="150">
        </div>
        <div class="flex flex-col items-center justify-center ">
        <h1 class="flex items-center text-xl justify-center font-extrabold mb-2">Tipas Integrated National Highschool</h1>

            <p class="flex items-center justify-center mb-2 mt-0">Tipas San Juan, Batangas</p>
        </div>

        <h2 class="flex items-center justify-center font-extrabold text-2xl mb-8">Documentary Requests</h2>

        <div class="flex flex-col items-center justify-center ">
            <input type="hidden" id="email" name="email" value="{{Auth::user()->email}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
        </div>

<div class=" flex flex-col items-center">
        <div class="flex flex-col   ">
            <label class="text-md pr-2">Name:</label>
            <input type="text"  id="name" name="name" value="{{ $data->firstname }} {{ $data->lastname }}" class=" w-full shadow-sm bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Name" required>
        </div>

        <div class="flex flex-col ">
            <label class="text-md pr-2">Grade:</label>
            <input type="text" id="phone" name="phone" value="{{$data->grade}}" class="shadow-sm bg-gray-50 border border-gray-300 mb-0 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Grade" required>
        </div>

        <div class="flex flex-col  ">
            <label class="text-md pr-4">Section:</label>
            <input type="text" id="subject" name="subject" value="{{$data->section}}" class="shadow-sm bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Section" required>
        </div>

        {{-- </div> --}}
        <h2 class=" text-md flex flex-col ">Here are the available documents to request on:</h2>

        

        <div class="flex flex-col ">
       
        <select class="w-1/2 appearance-none text-black shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline rounded-lg focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="message" name="message" >
            <option value="">Select</option>
            <option value="Good Moral" @if (old('documents') == "Good Moral") {{ 'selected' }} @endif>Good Moral</option>
            <option value="Form 137" @if (old('documents') == "Form 137") {{ 'selected' }} @endif>Form 137</option>  
            {{-- <option value="Form 138" @if (old('documents') == "Form 138") {{ 'selected' }} @endif>form 138</option> --}}
            <option value="COG" @if (old('documents') == "COG") {{ 'selected' }} @endif>COG</option>                 
        </select>
        </div>
       
</div>
        <p class="flex flex-col  mt-4 text-md">
            After submitting your request, kindly wait for administrator's response through your email.
        </p>
        <div class="flex flex-col items-center justify-center  ">
        <button type="submit" class="flex flex-col items-center justify-center py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gre sm:w-fit hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-gray-700 dark:hover:bg-gre dark:focus:ring-primary-800">Send message</button>
        </div>
</form> -->






<!-- component -->
<form method="POST" action="{{ route('contact.us.store') }}" class="space-y-8  " id="contactUSForm">
@csrf
	<!-- COMPONENT CODE -->
	<div class="container mx-auto my-4 px-4 lg:px-20 ">

		<div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl dark:bg-[#222738]">
			<div class="flex">
				<h1 class="font-bold uppercase text-2xl">Send us a <br /> request</h1>
			</div>
			<div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
				<input value="{{$data->firstname}} {{$data->lastname}}" name="name" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text"  />
				<input value="{{Auth::user()->email}}" name="email" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text"  />
				<input value="Grade {{$data->grade}}" name="phone" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" />
				<input value="{{$data->section}}" name="subject" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text"/>
        </div>
                <div class="my-4">
                    <select class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" id="message" name="message" required>
                        <option value="">Select Document Request</option>
                        <option value="Good Moral" @if (old('documents') == "Good Moral") {{ 'selected' }} @endif>Good Moral</option>
                        <option value="Form 137" @if (old('documents') == "Form 137") {{ 'selected' }} @endif>Form 137</option>  
                        <option value="Form 138" @if (old('documents') == "Form 138") {{ 'selected' }} @endif>form 138</option>
                        <option value="COG" @if (old('documents') == "COG") {{ 'selected' }} @endif>Certifiacate of Good Moral Character</option>                 
                    </select>
				</div>

				{{-- <div class="my-4">
					<textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
				</div> --}}
				<div class="my-2  w-full xl:w-1/2">
					<button type="submit" class="uppercase text-sm font-bold tracking-wide bg-gre text-gray-100 p-3 rounded-lg w-full hover:bg-gray-500 dark:hover:bg-gray-500 dark:bg-[#222738] dark:border
                      focus:outline-none focus:shadow-outline">
            Send Request
          </button>
				</div>
			</div>

			<div
				class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-gre dark:bg-[#222738] dark:border  rounded-2xl">
				<div class="flex flex-col text-white">
					<h1 class="font-bold uppercase text-4xl lg:text-xl my-4">Drop in our office</h1>
					<p class="text-gray-400">After submitting your request, kindly wait for administrator's response through your email.
					</p>

					<div class="flex my-4 w-2/3 lg:w-5/6">
						<div class="flex flex-col">
							<i class="fas fa-map-marker-alt pt-2 pr-2" />
            </div>
            <div class="flex flex-col">
              <h2 class="text-2xl">Main Office</h2>
              <p class="text-gray-400">Tipas San Juan Batngas Philippines</p>
            </div>
          </div>
          
          <div class="flex my-4 w-2/3 lg:w-5/6">
            <div class="flex flex-col">
              <i class="fas fa-phone-alt pt-2 pr-2" />
            </div>
            <div class="flex flex-col">
              <h2 class="text-2xl lg:text-md">Call Us</h2>
              <p class="text-gray-400 lg:text-sm">Tel: 012-345-6789</p>
              <p class="text-gray-400 lg:text-sm">Fax: 987-654-3210</p>
            </div>
          </div>
          
  
        </div>
      </div>
    </div>
    <!-- COMPONENT CODE -->

</form>

@endsection