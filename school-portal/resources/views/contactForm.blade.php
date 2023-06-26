@extends('layouts.home')

@section('content')	




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

			<div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-gre dark:bg-[#222738] dark:border  rounded-2xl">
				<div class="flex flex-col text-white">

					<h1 class="font-bold uppercase text-4xl lg:text-xl my-4">Drop in our office</h1>
					<p class="text-gray-400">After submitting your request, kindly wait for administrator's response through your email.</p>

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