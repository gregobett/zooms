@extends('layouts.home')

@section('content')	





  <form method="POST" action="{{ route('contact.us.store') }}" class="space-y-8" id="contactUSForm">
    {{ csrf_field() }}
        <div class="flex items-center justify-center">
            <img src="/images/logo.png" width="150">
        </div>
        <div class="flex flex-col items-center justify-center ">
        <h1 class="flex items-center text-xl justify-center font-extrabold mb-2">Tipas Integrated National Highschool</h1>

            <p class="flex items-center justify-center mb-2 mt-0">Tipas San Juan, Batangas</p>
        </div>

        <h2 class="flex items-center justify-center font-extrabold text-2xl mb-8">Documentary Requests</h2>

        <div class="flex flex-col items-center justify-center ">
            <input type="hidden" id="email" name="email" value="{{Auth::user()->email}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-1/2 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
        </div>

        <div class="flex flex-col items-center justify-center ">
            <input type="text"  id="name" name="name" value="{{ $data->firstname }} {{ $data->lastname }}" class=" shadow-sm bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-1/2 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Name" required>
        </div>

       

        <div class="flex flex-col items-center justify-center ">
            <input type="text" id="phone" name="phone" value="{{$data->grade}}" class="shadow-sm bg-gray-50 border border-gray-300 mb-0 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-1/2 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Grade" required>
        </div>

        <div class="flex flex-col items-center justify-center ">
            <input type="text" id="subject" name="subject" value="{{$data->section}}" class="shadow-sm bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-1/2 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Section" required>
        </div>

        {{-- </div> --}}
        <h2 class=" text-md flex flex-col items-center justify-center">Here are the available documents to request on:</h2>

        <div class="flex flex-col items-center justify-center">
       
        <select class="w-1/2 appearance-none text-black shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline rounded-lg focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="message" name="message" >
            <option value="">Select</option>
            <option value="Good Moral" @if (old('documents') == "Good Moral") {{ 'selected' }} @endif>Good Moral</option>
            <option value="Form 137" @if (old('documents') == "Form 137") {{ 'selected' }} @endif>Form 137</option>  
            {{-- <option value="Form 138" @if (old('documents') == "Form 138") {{ 'selected' }} @endif>form 138</option> --}}
            <option value="COG" @if (old('documents') == "COG") {{ 'selected' }} @endif>COG</option>                 
        </select>
        </div>
       

        <p class="flex flex-col items-center justify-center mt-4 text-md">
            After submitting your request, kindly wait for administrator’s response through your email.
        </p>
        <div class="flex flex-col items-center justify-center  ">
        <button type="submit" class="flex flex-col items-center justify-center py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gre sm:w-fit hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-gray-700 dark:hover:bg-gre dark:focus:ring-primary-800">Send message</button>
        </div>
</form>
@endsection