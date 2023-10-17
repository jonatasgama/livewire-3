<div>
    @if($user)
        Usuário: {{ $user->name }}
        <br/>
        E-mail: {{ $user->email }}
        <br/>
        <x-secondary-button wire:click="refresh">Atualizar</x-secondary-button>
    @endif
</div>
