<?php

namespace App\Http\Livewire\Usermanagmenet;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class Create extends Component
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
        return view('livewire.usermanagmenet.create')->layout('layout.layout');
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
        session()->flash('message', 'User Created successfully');
        return redirect(route('create.user'));
    }
}
