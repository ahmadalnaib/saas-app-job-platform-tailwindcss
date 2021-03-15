<x-app-layout>
    @section('title','Plans')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plans') }}
        </h2>
    </x-slot>


    <div class="container mx-auto max-w-3xl  m-8 ">
        <x-card-form :action="route('subscriptions.store')">
            <input type="hidden" name="plan" value="{{request('plan')}}">
            <div class="p-8 px-16">
                <label for="coupon" class="text-sm text-gray-600">Coupon</label>
                <input id="coupon" class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"  type="text"  name="coupon">
            </div>
            <x-button data-secret="{{$intent->client_secret}}" id="card-button" class="ml-3 mb-4 indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer">
                {{ __('Pay') }}
            </x-button>
        </x-card-form>


            </div>


</x-app-layout>
