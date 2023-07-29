<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-2 mt-3 bg-body-tertiary">
                <!-- Sidebar -->
                @component('components.sidebar')
                @endcomponent
            </div>


            <!--Index-->
            <div class="col-10 ">
            @yield('content')
            </div>


        </div>
    </div>
</x-app-layout>