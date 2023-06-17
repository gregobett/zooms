@extends('layouts.navbarfooter')
@section('register')


<x-guest-layout>
<div class="container  lg:mt-0 xl:pt-16 mx-auto flex flex-wrap flex-col md:flex-row items-center 2xl:mt-16">
        <!--Left Col-->
    
        <div class=" hidden xl:block flex flex-col w-full xl:w-2/5  justify-center lg:items-center ">
          <h1 class="my-4 text-2xl md:text-3xl  xl:text-5xl  md:text-center text-white opacity-75 font-bold leading-tight text-center md:text-left lg:text-center">
            Tipas
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
              Integrated
            </span>
            National Highschool
          </h1>
          <p class="leading-normal text-white md:text-2xl  md:mx-auto mb-8 text-center">
          Nurturing Minds, Transforming Lives
          </p>
     
      
        </div>


    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
       

        <form method="POST" action="{{ route('register') }}" >
            @csrf

            <h1 class="flex items-center justify-center text-2xl font-bold mb-4">Register</h1>

            <div class="grid gap-6">
                <!-- Name -->
                <div class="space-y-2">
                    <x-label for="name" :value="__('Name')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="name" class="block w-full" type="text" name="name" :value="old('name')"
                            required autofocus placeholder="{{ __('Name') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Email Address -->
                <div class="space-y-0">
                    <x-label for="email" :value="__('Email')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="email" class="block w-full" type="email" name="email"
                            :value="old('email')" required placeholder="{{ __('Email') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <x-label for="password" :value="__('Password')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password" class="block w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="{{ __('Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password_confirmation" class="block w-full" type="password"
                            name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>


                <div class="space-y-2">
                    <x-label for="user_type" :value="__('User Type')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            {{-- <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" /> --}}
                        </x-slot>
                        <select x-model="color" id="user_type" name="user_type" class=" w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring-gre">

                        <option value = "">Select</option>
                        <option value="Student" @if (old('user_type') == "Student") {{ 'selected' }} @endif>Student</option>
                        <option value="Faculty" @if (old('user_type') == "Faculty") {{ 'selected' }} @endif>Faculty</option>
                        <option value="Admin" @if (old('user_type') == "Admin") {{ 'selected' }} @endif>Admin</option>
                       
                    </select>
                    @if ($errors->has('user_type'))
            <span class="text-danger">{{ $errors->first('user_type') }}</span>
        @endif
                       
                    </x-input-with-icon-wrapper>
                    @include('sweetalert::alert')
                </div>

                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                        <span>{{ __('Register') }}</span>
                    </x-button>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                        {{ __('Login') }}
                    </a>
                </p>
            
                </div>
              
        </form>
 
    </x-auth-card>
</x-guest-layout>


@endsection




