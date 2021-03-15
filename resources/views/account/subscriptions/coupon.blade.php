
<x-app-layout>
    @section('title','Subscriptions')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coupon') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">

        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

            <div class="md:w-2/3 w-full p-5">
                <form action="{{route('account.subscriptions.coupon')}}" method="post">
                    @csrf
                    <div class="p-8 px-16">
                        <label for="coupon" class="text-sm text-gray-600">Coupon</label>
                        <input id="coupon" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"  type="text"  name="coupon">
                    </div>
                    <x-button>Apply</x-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
