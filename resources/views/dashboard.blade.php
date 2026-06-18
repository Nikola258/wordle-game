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
                        <div class="flex flex-col gap-4 items-center" x-data="{
                            guesses: Array.from({length: 6}, () => Array(5).fill('')),
                            currentRow: 0,
                            currentCol: 0,
                            handleKey(e) {
                                if (this.currentRow >= 6) return;
                                const key = e.key.toUpperCase();
                                if (key === 'BACKSPACE' && this.currentCol > 0) {
                                    this.guesses[this.currentRow][--this.currentCol] = '';
                                } else if (key === 'ENTER' && this.currentCol === 5) {
                                    this.currentRow++;
                                    this.currentCol = 0;
                                } else if (/^[A-Z]$/.test(key) && this.currentCol < 5) {
                                    this.guesses[this.currentRow][this.currentCol++] = key;
                                }
                            }
                        }" @keydown.window="handleKey">

                            <div class="flex flex-col gap-2">
                                <template x-for="(row, rowIndex) in guesses" :key="rowIndex">
                                    <div class="flex gap-2">
                                        <template x-for="(letter, colIndex) in row" :key="colIndex">
                                            <div class="w-14 h-14 border-2 border-gray-400 flex items-center justify-center text-2xl font-bold uppercase text-gray-800"
                                                 :class="rowIndex === currentRow && colIndex === currentCol ? 'border-gray-600' : ''"
                                                 x-text="letter">
                                            </div>
                                        </template>
                                    </div>
                                </template>
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
