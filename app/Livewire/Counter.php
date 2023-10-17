<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class Counter extends Component
{

    #[Locked]
    public int $counter = 0;

    public string $name = 'Quentin';
    public string $last_name = 'Tarantino';

    public function mount(){
        //esse método sobrescreve o valor atrubído direto na view
        $this->counter = 10;

        $this->fill([
            'name' => 'Jonatas',
            'last_name' => 'Gama Souza'
        ]);
    }

    public function render(){
        return view('livewire.counter');
    }

    public function count(){
        $this->counter++;
    }

    public function refresh(){

    }

    public function resetar(){
        $this->reset('name', 'last_name', 'counter');
    }
}
