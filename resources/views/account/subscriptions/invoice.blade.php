<x-app-layout>
    @section('title','Subscriptions')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
        {{--navabr--}}


        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

            <div class="md:w-2/3 w-full p-5">
              @foreach($invoices as $invoice)
                <div class="text-center">
                    {{$invoice->date()->toFormattedDateString()}}
                     <h2>Total {{$invoice->total()}}</h2>

                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <a href="{{route('account.subscriptions.invoice',$invoice->id)}}">Download</a>
                    </button>

                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
