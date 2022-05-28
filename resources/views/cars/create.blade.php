<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Car') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-2 shadow-sm sm:rounded-lg">
                @foreach($errors->all() as $error)
                {{ $error }}
                @endforeach
                <form action="{{ route('cars.store') }}" method="post" class="space-y-8 divide-y divide-gray-200">
                    @csrf
                    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                        <div>
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Car Information</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">to create the wordle</p>
                            </div>

                            <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Car name </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="car-name" id="first-name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <p class="mt-2 text-sm text-gray-500">Write the car name, which players will be evaluated by</p>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Car name </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="car-name-ar" id="first-name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <p class="mt-2 text-sm text-gray-500">Write the car name, which players will be evaluated by</p>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Hint </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <textarea id="about" name="hint" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                        <p class="mt-2 text-sm text-gray-500">Write a hint so people attempt to guess the car</p>
                                    </div>
                                </div>

                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Hint (Arabic)</label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <textarea id="about" name="hint-ar" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                        <p class="mt-2 text-sm text-gray-500">Write a hint so people attempt to guess the car</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                            <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>