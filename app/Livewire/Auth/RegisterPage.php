<?php

namespace App\Livewire\Auth;

use App\Helpers\CartManagement;
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

    public $cart_items = [];

    public function mount()
    {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
    }

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

        $cart_items = CartManagement::getCartItemsFromCookie();

        if(empty($cart_items)){
            session()->flash('alert', [
            'type'     => 'success',
            'message'  => 'Account created successfully! Welcome to TechHaven',
            'position' => 'top-end',
            'timer'    => 3000,
            'toast'    => true,
        ]);

        return redirect()->intended('/');

        } else {
            session()->flash('alert', [
                'type'     => 'success',
                'message'  => 'Account created successfully! Welcome to TechHaven',
                'position' => 'top-end',
                'timer'    => 3000,
                'toast'    => true,
            ]);

        return redirect()->intended('/checkout');
        }       

    }
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
