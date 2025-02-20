<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('Reset Password | TechHaven')]
class ResetPasswordPage extends Component
{
    use LivewireAlert;

    public $token;

    #[Url]
    public $email;
    public $password;
    public $password_confirmation;

    public function mount($token){
        $this->token=$token;
    }

    public function save(){
        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        $status = Password::reset([
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
            'token' => $this->token,
        ],
        function(User $user, string $password){
            $password = $this->password;
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
            $user->save();
            event(new PasswordReset($user));
        });
        session()->flash('alert', [
            'type'     => 'success',
            'message'  => 'Password reset successfull! Proceed to Sign in.',
            'position' => 'top-end',
            'timer'    => 3000,
            'toast'    => true,
        ]);

        return $status === Password::PASSWORD_RESET?redirect('/login'):session()->flash('error','Something went wrong');
    }
    public function render()
    {
        return view('livewire.auth.reset-password-page');
    }
}
