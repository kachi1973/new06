<?php

namespace App\Livewire\Kasekisai;

use Livewire\Component;

class Row extends Component
{
    public $showModal = false;
    public function render()
    {
        return view('livewire.kasekisai.row');
    }
    public function openModal()
    {
        $this->showModal = true;
    }
    public function closeModal()
    {
        $this->showModal = false;
    }
}
