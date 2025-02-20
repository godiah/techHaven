<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sign In | TechHaven')]

class LoginPage extends Component
{
    use LivewireAlert;

    public $email;
    public $password;

    public function mount()
    {
        if(session()->has('alert')){
            $alert = session('alert');
            $this->alert($alert['type'], $alert['message'], [
                'position' => $alert['position'],
                'timer' => $alert['timer'],
                'toast'   => $alert['toast'],
            ]);
        }
    }

    public function save(){
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:8|max:255',
        ]);

        if(!Auth::attempt(['email'=>$this->email, 'password'=>$this->password])){
            $this->addError('login', 'Invalid credentials!');
            return;
        }

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Signed in successfully!',
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);

        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
