<form wire:submit="calculate">

    <x-primary-button class="mb-5" type="button" wire:click="toLogando()">
        Só logando <span wire:loading wire:taget="toLogando">...</span>
    </x-primary-button>
    <br>

    Evento sendo acionado pelo "submit"
    <br>
    <x-text-input placeholder="Primeiro número" wire:model="num1"/>
    <select wire:model="operator" class="text-slate-700">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <x-text-input placeholder="Segundo número" wire:model="num2"/>
    <x-primary-button type="submit">
        <span wire:loading.class="hidden" wire:target="calculate">Calcular</span>
        <span wire:loading wire:target="calculate">Calculando...</span>
    </x-primary-button>

    <x-primary-button type="button" wire:click="add10('num1')">Add 10 no 1</x-primary-button>
    <x-primary-button type="button" wire:click="add10('num2')">Add 10 no 2</x-primary-button>
    <br>

    Resultado: {{ $resultado }}
</form>
