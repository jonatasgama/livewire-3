<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
{

    public int $counter = 0;

    public function count(){
        $this->counter++;
    }

    public function mount(){
        //esse método sobrescreve o valor atrubído direto na view
        $this->counter = 10;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <p>Esse é um elemento inline</p>
            <hr/>
            <div class="mt-2"> {{ $counter }} </div>
            <x-primary-button wire:click="count">
                +1
            </x-primary-button>

            
            <div class="mt-5">Counter:: {{ $counter }}</div>
        </div>

        HTML;
    }
}
