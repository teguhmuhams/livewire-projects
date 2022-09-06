<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1 = 0;
    public $num2 = 0;
    public $action = '+';
    public bool $disabled = false;
    public $result = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        if ($this->action === '+') {
            $this->result = $this->num1 + $this->num2;
        } elseif ($this->action === '-') {
            $this->result = $this->num1 - $this->num2;
        } elseif ($this->action === '*') {
            $this->result = $this->num1 * $this->num2;
        } elseif ($this->action === '/') {
            $this->result = $this->num1 / $this->num2;
        } elseif ($this->action === "mod") {
            $this->result = $this->num1 % $this->num2;
        }
    }

    public function updated($property)
    {
        if ($this->num1 == '' || $this->num2 == '')
            $this->disabled = true;
        else
            $this->disabled = false;
    }
}
