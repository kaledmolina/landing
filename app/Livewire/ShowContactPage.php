<?php

namespace App\Livewire;

use App\Models\FormContact;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';




    public function submit(){
        $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email'
        ],
        [
            'name.required' => 'El campo nombre es obligatorio',
            'name.min' => 'El campo nombre debe tener al menos 6 caracteres',
            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'El campo email debe ser un email válido'
        ],
        [
            'name' => 'Nombre',
            'email' => 'Correo electrónico'
        ]);
        $form = FormContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        $this->reset();
        session()->flash('success', 'Formulario enviado con éxito, nos pondremos en contacto contigo lo antes posible.');
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
