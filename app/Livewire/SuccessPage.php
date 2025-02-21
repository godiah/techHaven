<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Order Placed | TechHaven')]

class SuccessPage extends Component
{
    public function render()
    {
        $latest_order = Order::with('address')->where('user_id', Auth::user()->id)->latest()->first();

        return view('livewire.success-page',[
            'order' => $latest_order,
        ]);
    }
}
