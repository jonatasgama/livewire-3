<?php

namespace App\Livewire;

use Livewire\Component;

class Calculadora extends Component
{

    public float $num1 = 0;
    public float $num2 = 0;
    public ?float $resultado = null;
    public string $operator = "+";

    public function render()
    {
        return view('livewire.calculadora');
    }

    public function calculate(){
        $tmp = "return $this->num1 $this->operator $this->num2;";
        $this->resultado = eval($tmp);
    }
}
