<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function save()
    {
        return true;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
