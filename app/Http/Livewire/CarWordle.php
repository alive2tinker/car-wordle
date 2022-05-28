<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarWordle extends Component
{
    public $currentStep = 0;
    public $maxTries = 5;
    public $input = '';
    public $car = null;
    public $succeeded = false;
    public $failed = false;

    public function mount()
    {
        $this->car = Car::where('current', true)->first();
    }

    public function submitTry()
    {
        if($this->input === $this->car->name || $this->input === $this->car->name_ar){
            $this->succeeded = true;
        }else if($this->currentStep === $this->maxTries){
            $this->failed = true;
        }else{
            $this->showFeedback();
            $this->currentStep++;
        }
        $this->input = '';
    }

    public function showFeedback()
    {
        if(str_contains($this->car->name, $this->input) && ($this->car->name != $this->input)){
            $this->addError("try-{$this->currentStep}", __("You are very close"));
        }else if(str_contains($this->car->name_ar, $this->input) && ($this->car->name_ar != $this->input)){
            $this->addError("try-{$this->currentStep}", __("You are very close"));
        }else{
            $this->addError("try-{$this->currentStep}", __("Incorrect Attempt"));
        }
    }

    public function render()
    {
        return view('livewire.car-wordle');
    }
}
