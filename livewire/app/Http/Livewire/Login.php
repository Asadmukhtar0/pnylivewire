<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\User;
class Login extends Component
{	
	public $email;
	public $password;
	protected $rules = [
        'email' => 'required|email',
		'password' => 'required',
    ];
    
    public function render()
    {
        return view('livewire.login')->layout('layout.main');
    }
    public function sub(){
    	$this->validate();
    	if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
		    // The user is being remembered...
		   	$user = User::where('email',$this->email)->first();
		   	//dd($user);
		    Auth::login($user);
		    return redirect(route('dashboard'));
		} else {
			  session()->flash('message', 'Email or Password is wrong, Please try again');
		}
    }
}
