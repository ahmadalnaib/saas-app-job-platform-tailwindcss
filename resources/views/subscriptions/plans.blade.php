<x-app-layout>
    @section('title','Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
            <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                    <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Plans Info</h2>
                    <p class="text-xs text-gray-500">for monthly cost 15$ and yearly 100$.</p>
                </div>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200 flex justify-around mx-auto">
                                @foreach($plans as $plan)
                                   <div class="flex ">
                                       <div class="bg-indigo-500 m-4 p-4 text-white">
                                           <a class="text-white-600 m-4 p-4" href="{{route('subscriptions',['plan'=>$plan->slug])}}">{{$plan->title}}</a>

                                       </div>
                                   </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
