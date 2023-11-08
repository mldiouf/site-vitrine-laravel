<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowteamPage extends Component
{
    public function render()
    {
        $members = Member::orderBy('name', 'ASC')->get();
        return view('livewire.show-team-page', [
            'members' => $members
        ]);
    }
}
