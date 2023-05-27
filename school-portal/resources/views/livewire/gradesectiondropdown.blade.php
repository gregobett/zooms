<div class="mb-6 md:mb-8 mt-6">

    <div class="form-item mb-4">
        <label for="grade" class="text-md">Grade</label>
   
            <select wire:model="selectedGrade" class="w-full appearance-none text-black text-opacity-70 rounded shadow py-1 px-2 focus:outline-none focus:shadow-outline focus:border-red-200 dark:bg-gray-600 dark:text-white" id="grade" name="grade" required>
                <option value="" selected>Choose</option>
                @foreach($grades as $grade)
                    <option value="{{ $grade->id }}" @if (old('grade') == "{{ $grade->id }}") {{ 'selected' }} @endif>{{ $grade->name }}</option>
                
                @endforeach
            
            </select>

    </div>
   
    {{-- <option value="Grade 1" @if (old('grade') == "Grade 1") {{ 'selected' }} @endif>Grade 1</option> --}}
  
        <div class="form-item ">
            <label for="city" class="text-md">Section</label>
  
         
                <select class="w-full appearance-none text-black text-opacity-70 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="section" name="section" required>
                    <option value="" selected>Choose</option>
                    @foreach($sections as $section)
                        <option value="{{ $section->name }}"  @if (old('grade') == "{{ $grade->id }}  {{ $grade->name }}") {{ 'selected' }} @endif>{{ $section->name}}</option>
                     
                    @endforeach
                   
                </select>
         
        </div>

</div>
