<x-app-layout>
    @section('title','Create Job')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Job') }}
        </h2>
    </x-slot>

    <main class="container mx-auto flex  flex-col md:flex-row max-w-custom mt-16">
        <div class="w-70 md:mr-5 md:mx-0 mx-auto ">
            <div class="bg-white md:sticky md:top-8 border-2 border-blue-100 rounded-xl mt-16">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an job</h3>
                </div>
                <livewire:create-job/>
            </div>
        </div>
        <div class="w-full px-2 md:px-0 md:w-175">
            <nav class="hidden md:flex items-center justify-between text-xs ">
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li><a class="border-b-4 pb-3 border-blue-500" href="#">All Jobs (87)</a></li>
                    <li>
                        <a class="border-b-4 pb-3 text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500"
                           href="#">Considering</a>
                    </li>

                    <li>
                        <a class="border-b-4 pb-3 text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500"
                           href="#">In Progress (1)</a>
                    </li>
                </ul>

                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li><a class="border-b-4 pb-3 border-blue-500" href="#">Implemented (17)</a></li>
                    <li>
                        <a class="border-b-4 pb-3 text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500"
                           href="#">Closed (55)</a>
                    </li>
                </ul>

            </nav>

            {{--           filters--}}
            <div class="mt-8">
                <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
                    <div class="w-full md:w-1/3">
                        <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                            <option value="category one">Category one</option>
                            <option value="category two">Category two</option>
                            <option value="category three">Category three</option>
                            <option value="category four">Category four</option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/3">
                        <select name="city" id="city" class="w-full rounded-xl px-4 py-2 border-none">
                            <option value="city one">City one</option>
                            <option value="city two">City two</option>
                            <option value="city three">City three</option>
                            <option value="city four">City four</option>
                        </select>
                    </div>
                    <div class="w-full md:w-2/3 relative">
                        <input type="search" placeholder="Find an Job" class="w-full border-none rounded-xl bg-white px-4 py-2 pl-8 placeholder-gray-900">
                        <div class="absolute top-0 flex items-center h-full ml-2">
                            <svg class="w-4 text-gray-700 text-sm" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>


            {{--      jobs  --}}

            <div class="jobs-container space-y-6 my-6">
                @foreach($jobs as $job)
                <div   class="job-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
                    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                        <div class="text-center">
                            <div class="font-semibold text-2xl">12</div>
                            <div class="text-gray-500">Likes</div>
                        </div>
                        <div class="mt-8">
                            <button class="w-20 bg-gray-200 border border-gray-200  font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                                Like
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                        <div class="float-none  mx-2 md:mx-0">
                            <a href="" >
                                <img  src="{{$job->user->getAvatar()}}" alt="avatar" class="w-14 h-14 rounded-xl">
                            </a>
                        </div>


                        <div class="w-full flex flex-col justify-between md:mx-4 mx-2">
                            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                                <a href="{{route('job.show',$job)}}" class="hover:underline">{{$job->title}}</a>
                            </h4>
                            <p class="text-gray-600 mt-3 line-clamp-3"> {{$job->description}}</p>

                            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6 mb-6">
                                <div class="flex item-center text-xs font-semibold space-x-2 text-gray-400">
                                    <div>{{$job->created_at->diffForHumans()}}</div>
                                    <div>&bull;</div>
                                    <div>{{$job->category->name}}</div>
                                    <div>&bull;</div>
                                    <div class="text-gray-900">6 Comments</div>
                                </div>

                                <div x-data="{isOpen:false}"  class="flex items-center space-x-2 mt-4 md:mt-0">
                                    <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                        Open
                                    </div>
                                    <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 border rounded-xl h-7 transition duration-150 ease-in py-2 px-4">
                                        <svg fill="currentColor" width="24" height="6">
                                            <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"/>
                                        </svg>

                                        <ul x-show="isOpen" @click.away="isOpen= false"  x-cloak class=" absolute w-44 text-left ml-4  font-semibold bg-white shadow-lg rounded-xl py-3 md:ml-8 md:top-6 right-0 md:left-0">
                                            <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Make as Spam</a></li>
                                            <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Delete Job</a></li>
                                        </ul>
                                    </button>
                                </div>
                                {{--                               mobile version--}}
                                <div class="flex items-center md:hidden mt-4 md:mt-0">
                                    <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                        <div class="text-sm font-bold leading-none">12</div>
                                        <div class="text-xs font-semibold leading-none text-gray-400">Likes</div>
                                    </div>
                                    <button class="w-20 -mx-5 bg-gray-200 text-white border border-gray-200 font-bold text-xs uppercase rounded-xl hover:border-gray-200 transition duration-150 ease-in px-4 py-3">
                                        Like
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                @endforeach
                  <div class="my-8">
                      {{$jobs->links()}}
                  </div>
            </div>
        </div>

    </main>


</x-app-layout>
