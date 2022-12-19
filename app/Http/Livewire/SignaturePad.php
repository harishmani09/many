<?php

namespace App\Http\Livewire;

use Storage;
use Livewire\Component;
use Illuminate\Support\Str;

class SignaturePad extends Component
{
    public $signature;

    public function submit()
    {
        Storage::put('signatures/signature.png', base64_decode(Str::of($this->signature)->after(',')));
    }

    public function render()
    {
        return view('livewire.signature-pad');
    }
}
