<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('All Brands | TechHaven')]

class AllBrandsPage extends Component
{
    use WithPagination;

    public function render()
    {
        $brands = Brand::where('is_active',1)->paginate(4);

        return view('livewire.all-brands-page',[
            'brands' => $brands,
        ]);
    }
}
