<?php

namespace App\Livewire\Kasekisai;

use Livewire\Component;

class Shukasiji extends Component
{
    public $showModal = false;
    public function render()
    {
        return view('livewire.kasekisai.shukasiji');
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
