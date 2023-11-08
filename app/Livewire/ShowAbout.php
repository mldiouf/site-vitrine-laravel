<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowAbout extends Component
{
    public function render()
    {
        $members = Member::orderBy('name', 'ASC')->get();
        return view('livewire.show-about', [
            'members' => $members
        ]);
    }
}
