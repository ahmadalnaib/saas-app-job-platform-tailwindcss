@extends('app')

@section('content')
@include('partials.nav')


<main class="container mx-auto flex max-w-custom mt-16">
    <div class="w-70 mr-5">
        <div class="bg-white border-2 border-blue-100 rounded-xl mt-16">
            <div class="text-center px-6 py-2 pt-6">
                <h3 class="font-semibold text-base">Add an job</h3>
            </div>
            <form action="" method="post" class="space-y-4 px-4 py-6">
                <div>
                    <input type="text" class="w-full bg-gray-100 text-sm rounded-xl placeholder-gray-900 px-4 py-2 border-none " placeholder="your job">
                </div>

                <div>
                    <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none bg-gray-100 text-sm">
                        <option value="category one">Category one</option>
                        <option value="category two">Category two</option>
                        <option value="category three">Category three</option>
                        <option value="category four">Category four</option>
                    </select>
                </div>

                <div>
                    <textarea placeholder="write the job h" name="job" id="job" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none"  ></textarea>
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
            </form>
        </div>
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


        {{--      jobs  --}}

        <div class="jobs-container space-y-6 my-6">
            <div class="job-container bg-white rounded-xl flex  ">


                <div class="flex flex-1 px-4 py-6">
                    <div class="float-none">
                        <a href="" >
                            <img  src="#" alt="avatar" class="w-full h-14 rounded-xl">
                        </a>
                    </div>


                    <div class=" w-full mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">A random job title go here</a>
                        </h4>
                        <p class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias consequatur cumque delectus dicta dolores doloribus earum esse et eum ex excepturi exercitationem explicabo hic id illum impedit inventore, ipsum iste, laboriosam minima necessitatibus neque nulla odit omnis quae quisquam ratione recusandae rem sapiente sequi suscipit totam vel. Alias animi blanditiis eligendi facilis ipsum minima odio, sequi voluptatem. Ab aliquam animi beatae, delectus dignissimos dolore doloribus, explicabo facere facilis harum laudantium magni maiores non numquam obcaecati officiis quam quasi, quia quod quos ratione reprehenderit repudiandae sed similique sit tempore tenetur ut veniam vero voluptas! Assumenda consectetur in officia perferendis vitae!</p>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex item-center text-xs font-semibold space-x-2 text-gray-400">
                                <div class="font-bold text-gray-900">Ahmed</div>
                                <div>&bull;</div>
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
                                <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-xl h-7 transition duration-150 ease-in py-2 px-4">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"/>
                                    </svg>

                                    <ul class="absolute hidden w-44 text-left ml-4  font-semibold bg-white shadow-lg rounded-xl py-3">
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

{{--button-container--}}
        <div class="buttons-container flex items-center justify-between mt-6">
           <div class="flex items-center space-x-4 ml-6">
               <div class=" relative">
                   <button type="button" class="flex text-white w-32 items-center justify-center  h-11 text-xs bg-blue-500 font-bold rounded-xl border border-blue-400 hover:bg-blue-500 transition duration-150 ease-in px-6 py-3">
                      Reply
                   </button>

                   <div class=" absolute z-10 w-96 text-left font-semibold text-sm bg-white rounded-xl mt-2 shadow-lg">
                       <form action="" class="space-y-4 px-4 py-5">
                           <div>
                               <textarea name="post_comment" id="" cols="30" rows="4" class="w-full text-xs bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2 " placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                               <div class="flex items-center space-x-3">
                                   <button type="button" class="flex text-white w-1/2 items-center justify-center  h-11 text-xs bg-blue-500 font-bold rounded-xl border border-blue-400 hover:bg-blue-500 transition duration-150 ease-in px-6 py-3">
                                     Post Comment
                                   </button>

                                   <button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-bold rounded-xl border border-gray-200 hover:bg-gray-200 transition duration-150 ease-in px-6 py-3">
                                       <svg class="w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                       </svg>
                                       <span class="ml-1">Attach </span>
                                   </button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>

              <div class="relative">
                  <button type="button" class=" flex items-center justify-center w-36  h-11 text-xs bg-gray-200 font-bold rounded-xl border border-gray-200 hover:bg-gray-200 transition duration-150 ease-in px-6 py-3">
                      <span class="mr-2">Set Status </span>
                      <svg class="w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                  </button>
                  <div class="absolute z-20 w-80 text-left font-semibold text-sm bg-white rounded-xl mt-2 shadow-lg">
                      <form action="" class="space-y-4 px-4 py-6">
                    <div class="space-y-2">
                        <label class="inline-flex items-center">
                            <input type="radio" checked="" class="bg-gray-200 text-blue-500 border-none"  name="status" value="1">
                            <span class="ml-2">Considering</span>
                        </label>
                    </div>
                          <div>
                              <label class="inline-flex items-center">
                                  <input type="radio" checked="" class="bg-gray-200 text-yellow-500 border-none" name="status" value="1">
                                  <span class="ml-2">In progress</span>
                              </label>
                          </div>
                          <div>
                              <label class="inline-flex items-center">
                                  <input type="radio" checked="" class="bg-gray-200 text-green-500 border-none" name="status" value="1">
                                  <span class="ml-2">Implemented</span>
                              </label>
                          </div>
                          <div>
                              <label class="inline-flex items-center">
                                  <input type="radio" checked="" class="bg-gray-200 text-red-500 border-none" name="status" value="3">
                                  <span class="ml-2">Closed</span>
                              </label>
                          </div>

                          <div>
                              <textarea name="post_comment" id="" cols="30" rows="4" class="w-full text-xs bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2 " placeholder="Add an update comment (optional)..."></textarea>
                              <div class="flex items-center space-x-3">
                                  <button type="button" class="flex text-white w-1/2 items-center justify-center  h-11 text-xs bg-blue-500 font-bold rounded-xl border border-blue-400 hover:bg-blue-500 transition duration-150 ease-in px-6 py-3">
                                      Update
                                  </button>

                                  <button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-bold rounded-xl border border-gray-200 hover:bg-gray-200 transition duration-150 ease-in px-6 py-3">
                                      <svg class="w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                      </svg>
                                      <span class="ml-1">Attach </span>
                                  </button>
                              </div>
                          </div>
                          <div>
                              <label class="inline-flex items-center">
                                  <input type="checkbox" name="notify" checked="" >
                                  <span class="ml-2">Notify all voters</span>
                              </label>
                          </div>
                      </form>
                  </div>
              </div>
           </div>
            <div class="flex items-center space-x-3 ">
                <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                    <div class="text-xl leading-snug">12</div>
                    <div class="text-gray-400 text-xs leading-none">Votes</div>
                </div>

                <button type="button" class=" w-32  h-11 uppercase text-xs bg-gray-200 font-bold rounded-xl border border-gray-200 hover:bg-gray-200 transition duration-150 ease-in px-6 py-3">
                    <span class="mr-2">Vote </span>
                </button>
            </div>
        </div>


{{--        comments--}}
        <div class="comments-container space-y-6 ml-24 my-8 mt-1 pt-4">
            <div class="comment-container  bg-white rounded-xl flex  ">

                <div class="flex flex-1 px-4 py-6">
                    <div class="float-none">
                        <a href="" >
                            <img  src="#" alt="avatar" class="w-full h-14 rounded-xl">
                        </a>
                    </div>


                    <div class=" w-full mx-4">

                        <p class="text-gray-600 mt-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias consequatur cumque delectus dicta dolores doloribus earum esse et eum ex excepturi exercitationem explicabo hic id illum impedit inventore, ipsum iste, laboriosam minima necessitatibus neque nulla odit omnis quae quisquam ratione recusandae rem sapiente sequi suscipit totam vel. Alias animi blanditiis eligendi facilis ipsum minima odio, sequi voluptatem. Ab aliquam animi beatae, delectus dignissimos dolore doloribus, explicabo facere facilis harum laudantium magni maiores non numquam obcaecati officiis quam quasi, quia quod quos ratione reprehenderit repudiandae sed similique sit tempore tenetur ut veniam vero voluptas! Assumenda consectetur in officia perferendis vitae!</p>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex item-center text-xs font-semibold space-x-2 text-gray-400">
                                <div class="font-bold text-gray-900">Ahmed</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
                                <div>&bull;</div>

                            </div>

                            <div class="flex items-center space-x-2">

                                <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-xl h-7 transition duration-150 ease-in py-2 px-4">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"/>
                                    </svg>

                                    <ul class="absolute hidden w-44 text-left ml-4  font-semibold bg-white shadow-lg rounded-xl py-3">
                                        <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Make as Spam</a></li>
                                        <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Delete Job</a></li>
                                    </ul>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class=" comment-container bg-white rounded-xl flex  ">

                <div class="flex flex-1 px-4 py-6">
                    <div class="float-none">
                        <a href="" >
                            <img  src="#" alt="avatar" class="w-full h-14 rounded-xl">
                        </a>
                        <div class="text-center text-blue-400 uppercase text-xs font-bold">admin</div>
                    </div>


                    <div class=" w-full mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">A random job title go here</a>
                        </h4>
                        <p class="text-gray-600 mt-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias consequatur cumque delectus dicta dolores doloribus earum esse et eum ex excepturi exercitationem explicabo hic id illum impedit inventore, ipsum iste, laboriosam minima necessitatibus neque nulla odit omnis quae quisquam ratione recusandae rem sapiente sequi suscipit totam vel. Alias animi blanditiis eligendi facilis ipsum minima odio, sequi voluptatem. Ab aliquam animi beatae, delectus dignissimos dolore doloribus, explicabo facere facilis harum laudantium magni maiores non numquam obcaecati officiis quam quasi, quia quod quos ratione reprehenderit repudiandae sed similique sit tempore tenetur ut veniam vero voluptas! Assumenda consectetur in officia perferendis vitae!</p>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex item-center text-xs font-semibold space-x-2 text-gray-400">
                                <div class="font-bold text-blue-400">Ahmed</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
                                <div>&bull;</div>

                            </div>

                            <div class="flex items-center space-x-2">

                                <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-xl h-7 transition duration-150 ease-in py-2 px-4">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"/>
                                    </svg>

                                    <ul class="absolute hidden w-44 text-left ml-4  font-semibold bg-white shadow-lg rounded-xl py-3">
                                        <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Make as Spam</a></li>
                                        <li><a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3" href="">Delete Job</a></li>
                                    </ul>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="comment-container  bg-white rounded-xl flex  ">

                <div class="flex flex-1 px-4 py-6">
                    <div class="float-none">
                        <a href="" >
                            <img  src="#" alt="avatar" class="w-full h-14 rounded-xl">
                        </a>
                    </div>


                    <div class=" w-full mx-4">

                        <p class="text-gray-600 mt-3 ">um impedit inventore, ipsum iste, laboriosam minima necessitatibus neque nulla odit omnis quae quisquam ratione recusandae rem sapiente sequi suscipit totam vel. Alias animi blanditiis eligendi facilis ipsum minima odio, sequi voluptatem. Ab aliquam animi beatae, delectus dignissimos dolore doloribus, explicabo facere facilis harum laudantium magni maiores non numquam obcaecati officiis quam quasi, quia quod quos ratione reprehenderit repudiandae sed similique sit tempore tenetur ut veniam vero voluptas! Assumenda consectetur in officia perferendis vitae!</p>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex item-center text-xs font-semibold space-x-2 text-gray-400">
                                <div class="font-bold text-gray-900">Ahmed</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
                                <div>&bull;</div>

                            </div>

                            <div class="flex items-center space-x-2">

                                <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-xl h-7 transition duration-150 ease-in py-2 px-4">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"/>
                                    </svg>

                                    <ul class="absolute hidden w-44 text-left ml-4  font-semibold bg-white shadow-lg rounded-xl py-3">
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
