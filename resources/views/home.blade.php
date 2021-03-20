
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

        <!-- Main Hero Content -->
        <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
            <h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block">Start Crafting Your</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">Next Great Idea</span></h1>
            <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">Simplifying the creation of landing pages, blog pages, application pages and so much more!</div>
            <div class="flex flex-col items-center mt-12 text-center">
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="#_" type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                        Post Job Now
                    </a>
                    <span class="absolute top-0 right-0 px-2 py-1 -mt-3 -mr-6 text-xs font-medium leading-tight text-white bg-green-400 rounded-full">only $15/mo</span>
                </span>
                <a href="#" class="mt-3 text-sm text-indigo-500">Learn More</a>
            </div>
        </div>
        <!-- End Main Hero Content -->

    </div>
</section>

   <main class="container mx-auto flex max-w-custom mt-16">
     <div class="w-70 mr-5">
         add category here
     </div>
       <div class="w-175">
           <nav class="flex items-center justify-between text-xs ">
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
             <div class="filters flex space-x-6">
                 <div class="w-1/3">
                     <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                          <option value="category one">Category one</option>
                         <option value="category two">Category two</option>
                         <option value="category three">Category three</option>
                         <option value="category four">Category four</option>
                     </select>
                 </div>

                 <div class="w-1/3">
                     <select name="city" id="city" class="w-full rounded-xl px-4 py-2 border-none">
                         <option value="city one">City one</option>
                         <option value="city two">City two</option>
                         <option value="city three">City three</option>
                         <option value="city four">City four</option>
                     </select>
                 </div>
                 <div class="w-2/3 relative">
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
               <div class="job-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
                   <div class="border-r border-gray-100 px-5 py-8">
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

                   <div class="flex px-2 py-6">
                       <a href="" class="flex-none">
                           <img  src="#" alt="avatar" class="w-full h-14 rounded-xl">
                       </a>

                       <div class="mx-4">
                           <h4 class="text-xl font-semibold">
                               <a href="#" class="hover:underline">A random job title go here</a>
                           </h4>
                           <p class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias consequatur cumque delectus dicta dolores doloribus earum esse et eum ex excepturi exercitationem explicabo hic id illum impedit inventore, ipsum iste, laboriosam minima necessitatibus neque nulla odit omnis quae quisquam ratione recusandae rem sapiente sequi suscipit totam vel. Alias animi blanditiis eligendi facilis ipsum minima odio, sequi voluptatem. Ab aliquam animi beatae, delectus dignissimos dolore doloribus, explicabo facere facilis harum laudantium magni maiores non numquam obcaecati officiis quam quasi, quia quod quos ratione reprehenderit repudiandae sed similique sit tempore tenetur ut veniam vero voluptas! Assumenda consectetur in officia perferendis vitae!</p>

                           <div class="flex items-center justify-between mt-6">
                               <div class="flex item-center text-xs font-semibold space-x-2 text-gray-400">
                                   <div>10 hours ago</div>
                                   <div>&bull;</div>
                                   <div>Category one</div>
                                   <div>&bull;</div>
                                   <div class="text-gray-900">3 Comments</div>
                               </div>

                               <div class="flex items-center space-x-2">
                                   <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                    Open
                                   </div>
                                   <button class="relative bg-gray-100 hover:bg-gray-200 rounded-xl h-7 transition duration-150 ease-in py-2 px-4">
                                       <svg fill="currentColor" width="24" height="6">
                                           <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"/>
                                       </svg>

                                       <ul class="absolute w-44 text-left ml-8 font-semibold bg-white shadow-lg rounded-xl py-3">
                                         <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Make as Spam</a></li>
                                           <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Delete Job</a></li>
                                       </ul>
                                   </button>
                               </div>

                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>

   </main>

@endsection
