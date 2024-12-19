<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Librarian Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold">{{ __("You're logged in!") }}</h3>
                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <div class="mt-4 bg-green-50 border-l-4 border-green-500 p-4 text-green-700">
                        {{ __("You're successfully logged in to the Librarian Panel. You can manage various library items.") }}
                    </div>

                    <div class="mt-6">
                        <div class="mt-4">
                            <a href="{{ route('books.index') }}" class="inline-flex items-center text-blue-500 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l-7 7 7 7z"></path>
                                </svg>
                                <span class="text-lg font-medium">{{ __('Manage Books') }}</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('journals.index') }}" class="inline-flex items-center text-blue-500 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l-7 7 7 7z"></path>
                                </svg>
                                <span class="text-lg font-medium">{{ __('Manage Journals') }}</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('newspapers.index') }}" class="inline-flex items-center text-blue-500 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l-7 7 7 7z"></path>
                                </svg>
                                <span class="text-lg font-medium">{{ __('Manage Newspapers') }}</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('cds.index') }}" class="inline-flex items-center text-blue-500 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l-7 7 7 7z"></path>
                                </svg>
                                <span class="text-lg font-medium">{{ __('Manage CDs') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
