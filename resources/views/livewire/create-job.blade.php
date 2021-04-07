<form wire:submit.prevent="createJob" action="" method="post" class="space-y-4 px-4 py-6">
    <div>
        <input type="text" wire:model.defer="title" name="title" class="w-full bg-gray-100 text-sm rounded-xl placeholder-gray-900 px-4 py-2 border-none " placeholder="your job">
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div>
        <select wire:model.defer="category" name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none bg-gray-100 text-sm">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    @error('category')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror

    <div>
        <textarea placeholder="Description job" wire:model.defer="description" name="description" id="description" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none"  ></textarea>
        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="flex items-center justify-end space-x-3">
        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-bold rounded-xl border border-gray-200 hover:bg-gray-200 transition duration-150 ease-in px-6 py-3">
            <svg class="w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
            </svg>
            <span class="ml-1">Attach </span>
        </button>

        <button type="submit" class="flex text-white items-center justify-center w-1/2 h-11 text-xs bg-blue-500 font-bold rounded-xl border border-blue-400 hover:bg-blue-500 transition duration-150 ease-in px-6 py-3">

            <span class="ml-1">Submit </span>
        </button>
    </div>
    <div>
        @if(session('success_message'))
            <div x-data="{isVisible:true}"
                 x-init="
                 setTimeout(() => {
                 isVisible=false
                 },5000)
                 "
                 x-show.transition.duration.1000ms="isVisible"
                 class="text-green-600 mt-4"
            >
                {{session('success_message')}}

            </div>
            @endif
    </div>
</form>
