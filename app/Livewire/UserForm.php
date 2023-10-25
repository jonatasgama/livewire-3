<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;

class UserForm extends Component
{
    //#[Rule(['required', 'string', 'max:255', 'min:2'])]
    public string $nome;

    //#[Rule(['required', 'email', 'max:255', 'min:2'])]
    public string $email;

    //#[Rule(['required', 'string', 'max:255', 'min:2', 'confirmed'])]
    public string $password;
    public string $password_confirmation;

    public function render()
    {
        return view('livewire.user-form');
    }

    public function rules(){
        return [
            'nome' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'email', 'max:255', 'min:2'],
            'password' => ['required', 'string', 'max:255', 'min:2', 'confirmed'],
        ];
    }
    
    public function save(){

        $this->validate();

        User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
}
