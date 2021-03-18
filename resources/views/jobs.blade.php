

@extends('app')

@section('title','Dundung - A Job platform for Refugee, Built by Refugee')

@section('content')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD6JP4X"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Section 1 -->
    <section class="w-full px-6 pb-12 antialiased bg-white">
        <div class="mx-auto max-w-7xl">
        @include('partials.nav')

        <!-- Section 1 -->
            <section class="py-24 bg-indigo-700 ">
                <div class="max-w-6xl px-10 mx-auto xl:max-w-7xl">
                    <div class="flex flex-col items-start justify-between lg:flex-row">
                        <div class="relative">
                            <h2 class="text-4xl font-extrabold text-white xl:text-5xl">Are you ready to level-up your game?</h2>
                            <p class="mt-2 text-xl text-indigo-400">Build beautiful pages with our components and templates.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>



    <div class="min-h-screen bg-gray-100 flex-col justify-between mt-20">
        <div>

            <!-- Page Content -->
            <main class="-mt-32">
                <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">

                        <div class="py-2">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="mt-1 relative">
                                    <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm rounded-full w-full pl-12" id="search" wire:model.debounce.200ms="search" type="text" placeholder="Search">
                                </div>

                                <div class="mt-4 bg-white shadow overflow-hidden rounded-md">
                                    <ul class="divide-y divide-gray-200">
                                        <li>
                                            <a href="https://stackjobs.dev/jobs/8" class="block hover:bg-gray-50">
                                                <div class="px-4 py-4 sm:px-6 flex items-center space-x-4">

                                                    <div class="flex-shrink-0">
                                                        <img class="h-12 w-12 object-cover rounded-full" src="https://ui-avatars.com/api/?name=Credia&amp;color=818CF8&amp;background=EEF2FF" alt="Credia">
                                                    </div>


                                                    <div class="flex-1">
                                                        <div class="flex items-center justify-between">
                                                            <p class="text-sm font-medium text-indigo-600 truncate">
                                                                Frontend developer required who knows Tailwind CSS and Laravel
                                                            </p>

                                                        </div>
                                                        <div class="mt-2 sm:flex sm:justify-between">
                                                            <div class="sm:flex">
                                                                <p class="flex items-center text-sm text-gray-500">
                                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                                                                    </svg>                            Credia
                                                                </p>
                                                                <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                                                    </svg>                            $30,000 - $35,000
                                                                </p>
                                                                <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                                    <!-- Heroicon name: solid/location-marker -->
                                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                    London, UK
                                                                </p>
                                                            </div>
                                                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                                <!-- Heroicon name: solid/calendar -->
                                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                </svg>
                                                                <p>
                                                                    Closing on <time datetime="2021-03-24">Mar 24th, 2021</time>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
                </div>
            </main>
        </div>
    </div>

@endsection
