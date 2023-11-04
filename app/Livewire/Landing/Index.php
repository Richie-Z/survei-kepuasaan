<?php

namespace App\Livewire\Landing;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.landing.app')]
    public function render()
    {
        return view('livewire.landing.index');
    }
}
