<x-app-layout>
    @section('title','Subscriptions')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscriptions') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
        {{--navabr--}}


        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

            <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Account Info</h2>
                <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name.</p>
            </div>
            <div class="md:w-2/3 w-full p-5">
            @if(auth()->user()->subscribed())
                @if($subscription)
                <ul>
                    <li>Plan: {{auth()->user()->plan->title}}</li>
                    <li>{{$subscription->interval()}}</li>
                    <li>{{$subscription->amount()}}</li>
                    @if(auth()->user()->subscription('default')->cancelled())
                        Ends {{$subscription->cancelAt()}} <a href="{{route('account.subscriptions.resume')}}">Resume</a>
                        @endif
                </ul>
                    @endif
                @else
                <p>you dont have a subscriptions</p>
                @endif

            </div>
        </div>
    </div>

</x-app-layout>
