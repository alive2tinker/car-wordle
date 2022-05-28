<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car Wordle') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto px-2">
        <div class="text-center py-5 space-y-3">
            <p>{{ __('Guess the Car in six tries.')}}</p>

            <p>{{ __('Each guess should be a valid car name. Hit the enter button to submit.') }}</p>

            <p>{{ __('Here is a hint for you') }}</p>
            <p class="font-bold text-lg">{{ __('Hint')}}</p>
            @if(app()->getLocale() === 'ar')
            <p>{{ $car->hint_ar }}</p>
            @else
            <p>{{ $car->hint }}</p>
            @endif
        </div>
        <div class="space-y-4">
            <div>
                <label for="email" class="sr-only">Email</label>
                <div class="flex space-x-1">
                    <div class="w-full">
                        <input id="try-0" type="text" wire:model.defer="input" @if($currentStep !=0) disabled @endif class="disabled:bg-gray-200 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="{{ __('First Try') }}">
                        @error('try-0')
                        <p class="mt-2 text-sm text-red-600" id="first-name-error">{{ $message }}
                        </p>
                        @enderror
                    </div>
                    <button wire:click="submitTry" @if($currentStep !=0) disabled @endif class="disabled:bg-gray-500 max-h-11 bg-indigo-500 rounded text-white py-2 px-4">{{__('Enter') }}</button>
                </div>
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <div class="flex space-x-1">
                    <div class="w-full">
                        <input id="try-1" type="text" wire:model.defer="input" @if($currentStep !=1) disabled @endif class="disabled:bg-gray-200 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="{{ __('Second Try') }}">
                        @error('try-1')
                        <p class="mt-2 text-sm text-red-600" id="first-name-error">{{ $message }}
                        </p>
                        @enderror
                    </div>
                    <button wire:click="submitTry" @if($currentStep !==1) disabled @endif class="disabled:bg-gray-500 max-h-11 bg-indigo-500 rounded text-white py-2 px-4">{{__('Enter') }}</button>
                </div>
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <div class="flex space-x-1">
                    <div class="w-full">
                        <input id="try-2" type="text" wire:model.defer="input" @if($currentStep !=2) disabled @endif class="disabled:bg-gray-200 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="{{ __('Third Try') }}">
                        @error('try-2')
                        <p class="mt-2 text-sm text-red-600" id="first-name-error">{{ $message }}
                        </p>
                        @enderror
                    </div>
                    <button wire:click="submitTry" @if($currentStep !==2) disabled @endif class="disabled:bg-gray-500 max-h-11 bg-indigo-500 rounded text-white py-2 px-4">{{__('Enter') }}</button>
                </div>
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <div class="flex space-x-1">
                    <div class="w-full">
                        <input id="try-3" type="text" wire:model.defer="input" @if($currentStep !=3) disabled @endif class="disabled:bg-gray-200 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="{{ __('Fourth Try') }}">
                        @error('try-3')
                        <p class="mt-2 text-sm text-red-600" id="first-name-error">{{ $message }}
                        </p>
                        @enderror
                    </div>
                    <button wire:click="submitTry" @if($currentStep !==3) disabled @endif class="disabled:bg-gray-500 max-h-11 bg-indigo-500 rounded text-white py-2 px-4">{{__('Enter') }}</button>
                </div>
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <div class="flex space-x-1">
                    <div class="w-full">
                        <input id="try-4" type="text" wire:model.defer="input" @if($currentStep !=4) disabled @endif class="disabled:bg-gray-200 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="{{ __('Fifth Try') }}">
                        @error('try-4')
                        <p class="mt-2 text-sm text-red-600" id="first-name-error">{{ $message }}
                        </p>
                        @enderror
                    </div>
                    <button wire:click="submitTry" @if($currentStep !==4) disabled @endif class="disabled:bg-gray-500 max-h-11 bg-indigo-500 rounded text-white py-2 px-4">{{__('Enter') }}</button>
                </div>
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <div class="flex space-x-1">
                    <div class="w-full">
                        <input id="try-5" type="text" wire:model.defer="input" @if($currentStep !=5) disabled @endif class="disabled:bg-gray-200 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="{{ __('Sixth Try') }}">
                        @error('try-5')
                        <p class="mt-2 text-sm text-red-600" id="first-name-error">{{ $message }}
                        </p>
                        @enderror
                    </div>
                    <button wire:click="submitTry" @if($currentStep !==5) disabled @endif class="disabled:bg-gray-500 max-h-11 bg-indigo-500 rounded text-white py-2 px-4">{{__('Enter') }}</button>
                </div>
            </div>
        </div>
        <!-- success modal -->
        <!-- This example requires Tailwind CSS v2.0+ -->
        @if($succeeded)
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                    <div class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6">
                        <div>
                            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                                <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">You are correct</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">The car was indeed {{ $car->name }}. come back tomorrow for a new car and a new challenge</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <a href="/" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:text-sm">Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- failed modal -->
        @if($failed)
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                    <div class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6">
                        <div>
                            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                                <!-- Heroicon name: outline/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">You failed this challenge</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">You should refresh the page and try again</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <a href="/" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">Try again</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif
    </div>
</div>