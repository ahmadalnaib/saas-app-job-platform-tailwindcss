<x-app-layout>
    @section('title','Subscriptions')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Card') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
    <x-card-form :action="route('account.subscriptions.update')">
        <x-button data-secret="{{$intent->client_secret}}" id="card-button" class="ml-3 mb-4 indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer">
            {{ __('Update Card') }}
        </x-button>
    </x-card-form>

    </div>


</x-app-layout>
