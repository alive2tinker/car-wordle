<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex py-4">
                <a href="{{ route('cars.create') }}" class="text-center bg-indigo-500 w-full rounded-md px-5 py-3 text-white">New Car</a>
            </div>
            <div class="bg-white overflow-hidden p-2 shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div>
                    <div class="flow-root mt-6">
                        <ul role="list" class="-my-5 divide-y divide-gray-200">
                            @foreach($cars as $car)
                            <li class="py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">

                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">{{ $car->name }}</p>
                                        <p class=" text-sm text-gray-500 truncate">{{ $car->current ? 'current car' : 'not current car' }}</p>
            </div>
            <div>
                <a href="{{ route('cars.show', $car->id) }}" class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50"> View </a>
            </div>
        </div>
        </li>
        @endforeach
        </ul>
    </div>
    </div>
    </div>
    <div class="py-4">
        {{ $cars->links() }}
    </div>
    </div>
    </div>
</x-app-layout>