<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Success') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session()->has('message'))
            <div class="rounded-lg bg-green-100 px-4 py-3 text-green-800">
                {{ session('message') }}
            </div>
        @endif
    </div>
</x-app-layout>
