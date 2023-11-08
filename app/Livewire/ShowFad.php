<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;

class ShowFad extends Component
{
    public function render()
    {
        $faqs = Faq::orderBy('question', 'ASC')->get();
        return view('livewire.show-fad',[
            'faqs'=> $faqs
        ]);
    }
}
