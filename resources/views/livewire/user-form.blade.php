<form wire:submit="save" class="flex flex-col gap-4">
    <div>
        <x-text-input placeholder="Nome" wire:model="nome"/>
        @error('nome')
            <div class="text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <x-text-input placeholder="E-mail" wire:model="email" type="email"/>
        @error('email')
            <div class="text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <x-text-input placeholder="Senha" wire:model="password" type="password"/>
        @error('password')
            <div class="text-sm">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input placeholder="Confirme a senha" wire:model="password_confirmation" type="password"/>
    </div>

    <div>
        <x-primary-button>
            <div wire:loading.class="hidden" wire:target="save">Salvar</div>
            <div wire:loading wire:target="save">Salvando...</div>
        </x-primary-button>
    </div>
</form>
