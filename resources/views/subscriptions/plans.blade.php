<x-app-layout>
    @section('title','Dashboard')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
            <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

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
