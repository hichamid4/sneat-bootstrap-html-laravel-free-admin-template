<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
    public int $counter = 0;

    public function update()
    {
        $this->counter++;
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
