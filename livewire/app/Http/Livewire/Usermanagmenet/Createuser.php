<?php

namespace App\Http\Livewire\Usermanagmenet;

use Livewire\Component;
use App\Models\User;
class Createuser extends Component
{
    public function render()
    {
    	$users = User::all();
        return view('livewire.usermanagmenet.createuser', compact('users'))->layout('layout.layout');
    }
}
