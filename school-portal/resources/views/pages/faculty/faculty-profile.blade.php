
 @extends('layouts.home')
 @section('content')
 <form method="post" action="{{url('faculty-profile-update')}}" class="flex flex-col space-y-8" enctype="multipart/form-data">
                   
    @csrf
    <input type="hidden" value="{{ $data->id }}" name="id" />
<div class="w-full  mt-4 shadow-2xl rounded my-24 overflow-hidden lg:pl-16 lg:pr-16">
    <div class="top h-60 w-full bg-blue-600 overflow-hidden relative" >
      <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
      <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
        
        <img src="{{asset('uploads/faculty/'.$data->photo)}}"  alt="image" class="h-24 w-24 object-cover rounded-full">
        <h1 class="text-2xl font-semibold"></h1>
        <h4 class="text-sm font-semibold"></h4>
      </div>
    </div>
    <div class="grid grid-cols-12 bg-white dark:bg-[#222738]">
  
    <div class="col-span-12 w-full md:pl-4  px-2 py-4 justify-center flex space-x-4  md:space-x-0 md:space-y-4 md:flex-col xl:col-span-2 md:justify-start ">
                    <label class="hidden md:block pb-2 uppercase tracking-wide text-gray-700 dark:text-white text-xs h-1 xl:pt-6" for="photo">
                        Add Photo
                    </label>
                <div class="flex flex-col items-center justify-center gap-4 pr-3">
                    <div class="w-full border-1  lg:border-2 bg-gre dark:border-none rounded">
                        <label>
                            <input type="file" class=" w-full text-sm text-grey-500 p-2 text-gre
                            file:py-1 file:px-22 file:lg:px-22 file:2xl:px-12
                            file:rounded-full file:border-0
                            file:text-sm file:font-medium
                            file:bg-gre file:text-slate-50 dark:bg-[#222738] dark:border dark:file:bg-[#222738]
                            hover:file:cursor-pointer hover:file:bg-gre
                            hover:file:text-amber-700
                            " id="photo" name="photo" />
                        </label>     
                    </div>

                    <button type="submit" class="w-full bg-gre hover:bg-gre text-sm md-text-md mt-2 text-slate-50 hover:text-red-700 border-gray-200 rounded p-3 pt-2 shadow-lg dark:bg-[#222738] dark:border">
                        Update
                    </button>

                </div>
            </div>
  
      <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 xl:col-span-10">
        <div class="px-4 pt-4">

       
  
            <div>
              <h3 class="text-2xl font-semibold">Edit Information</h3>
              <hr>
            </div>
  
            <div class="flex flex-col space-y-4 md:space-y-0 xl:flex-row xl:space-x-4">
                <div class="form-item w-full pt-4">
                    <label class="text-md ">Last Name</label>
                    <input type="text" value="{{$data->lastname}}" class="w-full appearance-none text-black rounded shadow py-1 px-2  mr-2 md:mb-4 focus:outline-none dark:bg-gray-400 focus:shadow-outline focus:border-blue-200 uppercase" id="lastname" name="lastname">
                    @error('lastname')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>

                <div class="form-item w-full xl:pt-4">
                    <label class="text-md ">First Name</label>
                    <input type="text" value="{{$data->firstname}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2  mr-2 md:mb-4 focus:outline-none focus:shadow-outline dark:bg-gray-400 focus:border-blue-200 uppercase" id="firstname" name="firstname" >
                    @error('firstname')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>

                <div class="form-item w-full xl:pt-4">
                    <label class="text-md ">Middle Name</label>
                    <input type="text" value="{{$data->middlename}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mb-4  mr-2 focus:outline-none focus:shadow-outline dark:bg-gray-400 focus:border-blue-200 uppercase" id="middlename" name="middlename" >
                    @error('middlename')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
            </div>


            <div class="flex flex-col space-y-4 md:space-y-0 xl:flex-row xl:space-x-4">  

                <div class="form-item w-full">
                    <label class="text-md ">Email</label>
                    <input type="text" value="{{$data->email}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 md:mb-4 focus:outline-none focus:shadow-outline dark:bg-gray-400 focus:border-blue-200" id="email" name="email">
                    @error('email')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>    
                
                  <div class="w-full">
                @livewireStyles
                    <livewire:gradesectiondropdown :initialGradeId="$data->grade ?? null" :initialSectionName="$data->section ?? null" />
                @livewireScripts
</div>
  
                <div class="form-item w-full">
                    <label class="text-md ">Date of Birth</label>
                    <input type="date" value="{{$data->dateofbirth}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mb-4  mr-2 focus:outline-none dark:bg-gray-400 focus:shadow-outline focus:border-blue-200 " id="dateofbirth" name="dateofbirth">
                    @error('dob')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
             
            </div>


            <div class="flex flex-col space-y-4 md:space-y-0 xl:flex-row xl:space-x-4">

                <div class="form-item w-full">
                    <label class="text-md ">Phone</label>
                    <input type="text" value="{{$data->phone}}" class="w-full appearance-none text-black rounded shadow py-1 px-2 mr-2 md:mb-4 focus:outline-none focus:shadow-outline dark:bg-gray-400 focus:border-blue-200" id="phone" name="phone">
                    @error('phone')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>

                <div class="form-item w-full">
                    <label class="text-md ">Gender</label>
                        <select class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 md:mb-4 focus:outline-none focus:shadow-outline dark:bg-gray-400 focus:border-blue-200 uppercase" id="gender" name="gender" >
                            <option  @if($data->gender == 'Male') selected @endif>Male</option>
                            <option @if($data->gender == "Female") selected @endif>Female</option>                
                        </select>
                    @error('gender')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror

                </div>

                <div class="form-item w-full">
                    <label class="text-md ">Religion</label>
                    <input type="text" value="{{$data->religion}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 md:mb-4 focus:outline-none dark:bg-gray-400 focus:shadow-outline focus:border-blue-200 uppercase" id="religion" name="religion">
                    @error('religion')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
  
                <div class="form-item w-full">
                    <label class="text-md ">Nationality</label>
                    <input type="text" value="{{$data->nationality}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mb-4 mr-2 focus:outline-none dark:bg-gray-400 focus:shadow-outline focus:border-blue-200 uppercase" id="nationality" name="nationality">
                    @error('nationality')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
    
            </div>



            <div class="form-item w-full">
                <label class="text-md ">Address</label>
                <textarea type="text"  class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline dark:bg-gray-400 focus:border-blue-200 uppercase" id="address" name="address">{{$data->address}}</textarea>
                @error('address')
           
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                  @enderror
           
            </div>

           

        </div>
        
      </div>
    </form>
    @include('sweetalert::alert')
    </div>



<style>
.table {
border-spacing: 0 15px;
}

i {
font-size: 1rem !important;
}

.table tr {
border-radius: 20px;
}

tr td:nth-child(n+5),
tr th:nth-child(n+5) {
border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
border-radius: .625rem 0 0 .625rem;
}
</style>
</div>

@endsection