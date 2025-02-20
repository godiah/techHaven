<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register | TechHaven')]
class RegisterPage extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function save(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        session()->flash('alert', [
            'type'     => 'success',
            'message'  => 'Account created successfully! Welcome to TechHaven',
            'position' => 'top-end',
            'timer'    => 3000,
            'toast'    => true,
        ]);

        return redirect()->intended();

    }
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
