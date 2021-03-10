<x-app-layout>
    @section('title','Subscriptions')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cancel Subscriptions') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
        {{--navabr--}}


        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

            <div class="md:w-2/3 w-full p-5">
                <form action="{{route('account.subscriptions.cancel')}}" method="post">
                    @csrf
                    <x-button>Cancel</x-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
