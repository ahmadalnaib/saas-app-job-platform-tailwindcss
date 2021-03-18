<x-app-layout>
    @section('title','Category')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>


    <div class="bg-gray-100 min-h-screen pb-24">

        <div class="container mx-auto max-w-3xl mt-8">

            @include('categories.nav')

            <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                    <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                        <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Profile Info</h2>
                        <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name, and Image.</p>
                    </div>
                    <div class="md:w-2/3 w-full">
                        <div class="py-8 px-16">
                            <label for="name" class="text-sm text-gray-600">Name</label>
                            <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="text" value="{{$category->name}}" name="name">
                            @error('name')
                            <span class="text-red-700">{{$message}}</span>
                            @enderror
                        </div>
                        <hr class="border-gray-200">
                        <x-button class="m-4 p-4">
                            Update
                        </x-button>

                    </div>

                </div>

            </form>
        </div>
    </div>



</x-app-layout>
