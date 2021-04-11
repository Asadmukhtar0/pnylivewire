<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
		'password' => 'required|confirmed',
    ];

    public function render()
    {
        return view('livewire.register')->layout('layout.main');
    }

    public function submit(){
    	$this->validate();
    }
}
