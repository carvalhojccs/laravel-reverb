<div class="mt-8 flex flex-row justify-between items-center">
    <x-primary-button wire:click='processReport'>Processar Relatório</x-primary-button>

    <span class="relative flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75"
        :class="{
            'bg-yellow-400': $wire.status === 'processing',
            'bg-green-400': $wire.status === 'done',
        }"
        ></span>
        <span class="relative inline-fex rounded-full h-3 w-3"
        :class="{
            'bg-yellow-400': $wire.status === 'processing',
            'bg-green-400': $wire.status === 'done',
        }"
        ></span>
    </span>
</div>
