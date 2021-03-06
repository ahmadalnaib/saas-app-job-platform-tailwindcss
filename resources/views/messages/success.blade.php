

@if(session('status'))
<div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-green-400 my-2 rounded-lg px-6 border-l-4 -ml-4 border-gray-100 bg-green-500 mt-6">
    <div class="flex justify-between  items-center py-4">
        <i class="fas fa-check border-2 border-gray-800 px-2 rounded-full fill-current text-4xl font-light text-gray-200"></i>
        <div class="ml-5">
            <h1 class="text-lg font-bold text-gray-800">Well done!</h1>
            <p class="text-white my-0">{{session('status')}}.</p>
        </div>
        <div>
            <button type="button"  @click="show = false"  class="text-yellow-100">
                <span class="text-2xl">&times;</span>
            </button>
        </div>
    </div>
</div>

@endif



@if(session('error'))
    <div x-data="{ show: true }" x-show="show" class="w-11/12 md:w-3/5 bg-red-400 my-2 rounded-lg px-6 border-l-4 -ml-4 border-gray-100 bg-green-500 mt-6">
        <div class="flex justify-between  items-center py-4">
            <i class="fas fa-check border-2 border-gray-800 px-2 rounded-full fill-current text-4xl font-light text-gray-200"></i>
            <div class="ml-5">
                <h1 class="text-lg font-bold text-gray-800">Well done!</h1>
                <p class="text-white my-0">{{session('status')}}.</p>
            </div>
            <div>
                <button type="button"  @click="show = false"  class="text-yellow-100">
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
        </div>
    </div>

@endif

