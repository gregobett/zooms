<div class="flex flex-col lg:flex-row  gap-x-4  md:mb-2 ">

    <div class="form-item w-full">
        <label for="grade" class="text-md">Grade</label>

        <select wire:model="selectedGrade" class="w-full appearance-none text-black mb-4 rounded shadow py-1  focus:outline-none focus:shadow-outline focus:border-red-200 dark:bg-gray-400  uppercase" id="grade" name="grade" required>
            <option value="" selected>Choose</option>
            @foreach($grades as $grade)
                <option value="{{ $grade->id }}" @if ($selectedGrade == $grade->id) {{ 'selected' }} @endif>{{ $grade->name }}</option>
            @endforeach
        </select>

    </div>

    <div class="form-item w-full">
        <label for="section" class="text-md">Section</label>

        <select wire:model="selectedSection" class="w-full appearance-none text-black  md:mb-2 rounded shadow py-1 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-400  uppercase" id="section" name="section" required>
            <option value="" selected>Choose</option>
            @foreach($sections as $section)
                <option value="{{ $section->name }}" @if ($selectedSection == $section->name) {{ 'selected' }} @endif>{{ $section->name }}</option>
            @endforeach
        </select>

    </div>
</div>
