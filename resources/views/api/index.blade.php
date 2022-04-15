<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('API token') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('api.api-token-manager')
        </div>
        <div>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item1">
              <a class="nav-link" href="{{url('/dashboard')}}" style="Color: Black">Home</a>
            </li>
          </ul>
        </div>

    </div>
</x-app-layout>
