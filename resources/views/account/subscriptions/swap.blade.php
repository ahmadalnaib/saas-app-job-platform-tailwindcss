<x-app-layout>
    @section('title','Subscriptions')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Swap') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
        {{--navabr--}}


        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

            <div class="md:w-2/3 w-full p-5">
                <form action="{{route('account.subscriptions.swap')}}" method="post">
                    @csrf
                   <div class="form-group text-center mb-8">
                       <label class=" mb-3 block text-sm font-medium text-gray-700" for="plan">Plan</label>
                       <select name="plan" id="plan" class="w-full border bg-white rounded px-3 py-2 outline-none">
                         @foreach($plans as $plan)
                               <option value="{{$plan->slug}}">{{$plan->title}}</option>
                           @endforeach
                       </select>
                   </div>
                    <button type="submit" class="mt-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Swap
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
