<ul class="flex border-b border-gray-300 text-sm font-medium text-gray-600 mt-3 px-6 md:px-0 ">
    <x-responsive-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
        {{ __('Profile') }}
    </x-responsive-nav-link>
    <x-responsive-nav-link :href="route('security')" :active="request()->routeIs('security')">
        {{ __('security') }}
    </x-responsive-nav-link>
    <x-responsive-nav-link :href="route('billing')" :active="request()->routeIs('billing')">
        {{ __('billing') }}
    </x-responsive-nav-link>

</ul>
