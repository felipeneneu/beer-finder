<div>
    <x-flux::main container="">
        <div class="flex flex-row items-center justify-between w-full">
            <div>
                <x-flux::heading size="xl">Cervejas</x-flux::heading>
                <x-flux::text class="mt-2 mb-6 text-base">Listagem de Cervejas</x-flux::text>
            </div>

            <x-flux::button href="{{ route('beers.create') }}" icon="plus-circle">Criar nova cerveja</x-flux::button>
        </div>
    </x-flux::main>
</div>
