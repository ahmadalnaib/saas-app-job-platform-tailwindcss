<ul class="flex border-b border-gray-300 text-sm font-medium text-gray-600 mt-3 px-6 md:px-0 ">
    <x-responsive-nav-link :href="route('account.subscriptions')" :active="request()->routeIs('account.subscriptions')">
        {{ __('Subscription') }}
    </x-responsive-nav-link>
     @if(auth()->user()->subscribed())

         @can('cancel',auth()->user()->subscription('default'))

    <x-responsive-nav-link :href="route('account.subscriptions.cancel')" :active="request()->routeIs('account.subscriptions.cancel')">
        {{ __('Cancel Subscription') }}
    </x-responsive-nav-link>

        @endcan

             @can('resume',auth()->user()->subscription('default'))
                 <x-responsive-nav-link :href="route('account.subscriptions.resume')" :active="request()->routeIs('account.subscriptions.resume')">
                     {{ __('Resume Subscription') }}
                 </x-responsive-nav-link>
             @endcan
@endif


</ul>
@include('messages.success')
