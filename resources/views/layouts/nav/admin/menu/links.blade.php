<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
        {{ __('admin.index') }}
    </x-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
        {{ __('Dashboard') }}
    </x-nav-link>
</div>


