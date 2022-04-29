<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher;

class Search extends Component
{
    public $search = '';
    public $teachers;

    public function render()
    {
        $this->teachers = Teacher::where('nama', 'like', '%' . $this->search . '%')
        ->orWhere('nip', 'like', '%' . $this->search . '%')
        ->orWhere('lahir', 'like', '%' . $this->search . '%')->get();
        return view('livewire.search');
    }
}
