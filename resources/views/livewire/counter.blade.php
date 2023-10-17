<div>
    
    <div> {{ $counter }} </div>
    <x-primary-button wire:click="count">
        +1
    </x-primary-button>

    
    <div class="mt-5">Counter: {{ $counter }}</div>

    <br/>

    <x-text-input wire:model.live="counter"/>
    <x-primary-button wire:click="refresh">Atualizar</x-primary-button>
    <x-primary-button wire:click="resetar">Resetar</x-primary-button>

    <br/><br/>

    <x-text-input wire:model.live="name"/>   

    <br/><br/>

    <div class="mt-5">Nome: {{ $name }} {{ $last_name }}</div>
    <br/><br/>
    <div x-data="">
        <span x-text="$wire.name"></span>
    </div>
    
</div>
