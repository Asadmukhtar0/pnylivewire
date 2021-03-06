<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users',
		'password' => 'required|confirmed',
    ];

    public function render()
    {
        return view('livewire.register')->layout('layout.main');
    }

    public function submit(){
    	$this->validate();
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password  = Hash::make($this->password);
        $user->save();
        $this->name = "";
        $this->email = "";
        $this->password = "";
        return redirect(route('login'));
    }
}
