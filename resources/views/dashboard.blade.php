<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
                        <div class="flex flex-col gap-4 items-center">

                            <div class="flex flex-col gap-2">
                                @for ($row = 0; $row < 6; $row++)
                                    <div class="flex gap-2">
                                        @for ($col = 0; $col < 5; $col++)
                                            <div class="w-14 h-14 border-2 border-gray-400 flex items-center justify-center text-2xl font-bold uppercase text-gray-800">
                                            </div>
                                        @endfor
                                    </div>
                                @endfor
                            </div>

                            <div class="flex gap-3">
                                <button class="px-4 py-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700">
                                    Start Game
                                </button>
                                <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">
                                    Invite Friend
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
