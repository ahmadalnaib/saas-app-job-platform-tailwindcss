
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

            <div class="min-h-screen bg-gray-100 flex-col justify-between">
                <div>
                    <div class="bg-gray-800 pb-32">

                        <!-- Page Heading -->
                        <header class="py-10">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="lg:flex lg:items-center lg:justify-between">
                                    <div class="flex-1 min-w-0">
                                        <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
                                            Frontend developer required who knows Tailwind CSS and Laravel
                                        </h2>
                                        <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                                            <div class="mt-2 flex items-center text-sm text-gray-300">
                                                <!-- Heroicon name: solid/briefcase -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                                                </svg>
                                                Freelance
                                            </div>
                                            <div class="mt-2 flex items-center text-sm text-gray-300">
                                                <!-- Heroicon name: solid/location-marker -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                </svg>
                                                Remote (London, UK)
                                            </div>
                                            <div class="mt-2 flex items-center text-sm text-gray-300">
                                                <!-- Heroicon name: solid/currency-dollar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                                </svg>
                                                $30,000 - $35,000
                                            </div>
                                            <div class="mt-2 flex items-center text-sm text-gray-300">
                                                <!-- Heroicon name: solid/calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span>
                        Closing on <time datetime="2021-03-24">Mar 24th, 2021</time>
                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                <span class="sm:ml-3">
                                            <a href="https://stackjobs.dev/jobs/8/apply" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
</svg>                            Apply
                        </a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>

                    <!-- Page Content -->
                    <main class="-mt-32">
                        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                            <div class="w-full flex flex-col lg:flex-row gap-8">
                                <div class="lg:w-9/12 xl:w-8/12 bg-white rounded-md shadow px-6 py-4">
                                    <div class="flex flex-col space-y-4 mb-8">


                                        <div class="flex flex-row justify-between w-full items-baseline space-x-6">
                                            <div class="flex-shrink-0 text-gray-800 font-medium">
                                                Nice-to-have skills
                                            </div>
                                            <div class="flex items-center flex-wrap space-x-1 justify-end">
                                                            <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium bg-indigo-100 text-indigo-700">
                                    Tailwind CSS
                                </span>
                                                <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium bg-indigo-100 text-indigo-700">
                                    Laravel
                                </span>
                                                <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium bg-indigo-100 text-indigo-700">
                                    Vue.js
                                </span>
                                            </div>
                                        </div>
                                        <hr class="border-gray-200">
                                    </div>

                                    <div class="font-sans prose max-w-full"><p>I require a freelance frontend developer who has experience in Tailwind CSS and Laravel.</p>
                                        <p>They should have experience in:</p>
                                        <ul>
                                            <li>CSS, SCSS</li>
                                            <li>HTML5</li>
                                            <li>Responsive CSS</li>
                                            <li>Vue.js</li>
                                            <li>Tailwind CSS</li>
                                            <li>Git/Github</li>
                                            <li>Must be comfortable using tailwind UI or learning how to use it</li>
                                        </ul>
                                        <p>The frontend website is fairly simple. You will receive design files and you will use your skills to make them come to life. The designs are not pixel perfect but more of a sort of guide on how it should generally look like. You will use the closest components that Tailwind UI provides or write those components using Tailwind CSS if there is no Tailwind UI component that matches.</p>
                                        <p>The project is using the Laravel framework and the templates will be using blade files.</p>
                                        <p>You would be expected to know how to make pull requests in github and all your code you write will go thought a code review process.</p>
                                        <p>I prefer a developer who can be around 3-4 hours from GMT 0</p>
                                    </div>
                                </div>
                                <aside class="w-full block xl:w-4/12 lg:w-3/12">
                                    <div class="sticky bg-white rounded-md shadow p-4 px-8 space-y-6">
                                        <div class="text-2xl font-medium text-gray-800 text-center">
                                            Credia
                                        </div>


                                        <div class="flex-shrink-0">
                                            <img class="max-h-16 w-full rounded-md object-contain" src="https://ui-avatars.com/api/?name=Credia&amp;color=818CF8&amp;background=EEF2FF" alt="Credia">
                                        </div>


                                        <div class="space-y-2">

                                            <div class="flex items-center space-x-2 justify-center group">
                                                <svg class="text-gray-600 group-hover:text-gray-500 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>                        <a href="mailto:jobs@credia.co.uk" class="text-gray-700 font-medium group-hover:text-gray-500">
                                                    jobs@credia.co.uk
                                                </a>
                                            </div>

                                        </div>

                                        <div class="w-full text-center">
                                        </div>

                                        <div class="-mx-4">
                                            <a href="https://stackjobs.dev/jobs/8/apply" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>                        Apply
                                            </a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </main>
                </div>

            </div>




        </div>
    </section>


@endsection
