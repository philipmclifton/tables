<x-default-button x-data="{ disableBounce: false }" class="h-12 " x-bind:class="{ 'animate-bounce' : !isOpen && !disableBounce }" x-on:click="isOpen = ! isOpen">
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
        </svg>
    </x-slot>
    Action selected</x-default-button>