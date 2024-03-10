<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard AS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="/"><x-primary-button class="ml-3">
            Home
        </x-primary-button></a>
        <a href="/ticket/create"><x-primary-button class="ml-3">
            Support Ticket
        </x-primary-button></a>
        <a href="/ticket"><x-primary-button class="ml-3">
           All Support Ticket
        </x-primary-button></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
