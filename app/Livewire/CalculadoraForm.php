<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Renderless;

class CalculadoraForm extends Component
{
    public float $num1 = 0;
    public float $num2 = 0;
    public ?float $resultado = null;
    public string $operator = "+";

    public function render()
    {
        return view('livewire.calculadora-form');
    }

    public function calculate(){
        sleep(2);
        $tmp = "return $this->num1 $this->operator $this->num2;";
        $this->resultado = eval($tmp);
    }

    public function add10($param){

        $this->authorize('add10', $param);
        $this->$param += 10;
    }

    #[Renderless]
    public function toLogando(){
        $this->num2 = 1000;
        Log::info('logando : '.now()->timestamp);
    }
}
