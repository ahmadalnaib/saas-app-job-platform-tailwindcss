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


            <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8 mt-4">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>

                            <th></th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>


                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($categories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                               {{$category->name}}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{$category->created_at->diffForHumans()}}
                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-700 text-gray-100 rounded-lg px-4 py-2" type="submit">Delete</button>
                                </form>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{route('categories.edit',$category->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>

                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>

        </div>
    </div>
</x-app-layout>
