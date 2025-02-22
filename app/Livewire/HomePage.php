<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home | TechHaven')]

class HomePage extends Component
{
    use LivewireAlert;

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
    
    public function render()
    {
        $brands = Brand::where('is_active',1)->latest()->take(4)->get();
        $categories = Category::where('is_active',1)->latest()->take(4)->get();
        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }
}
