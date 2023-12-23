<?php

namespace App\Livewire;

use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];


    public function submit(){
        $this->validate();
        
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
