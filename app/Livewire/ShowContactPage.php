<?php

namespace App\Livewire;

use App\Models\FormContact;
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
        $form = FormContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
