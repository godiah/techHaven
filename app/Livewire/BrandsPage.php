<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Brands | Page')]
class BrandsPage extends Component
{
    use WithPagination;
    use LivewireAlert;

    #[Url()]
    public $selected_categories = [];

    #[Url()]
    public $sortBy = 'latest';

    public $brand;

    public function mount($brand){
        $this->brand = Brand::where('slug', $brand)->firstOrFail();
    }

    public function updatedSelectedCategories()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset('selected_categories');
        $this->reset('sortBy');
        $this->resetPage();
    }

    public function sort($option)
    {
        $this->sortBy = $option;
        $this->resetPage();
    }

    public function addToCart($product_id){
        $total_count = CartManagement::addItemToCart($product_id);

        $this->dispatch('update-cart-count', total_count:$total_count)->to(Navbar::class);

        $this->alert('success', 'Product Added To Cart Successfully!',[
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {
        $query = $this->brand->products();
        if (!empty($this->selected_categories)) {
            $query->whereIn('category_id', $this->selected_categories);
        }

        if ($this->sortBy === 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($this->sortBy === 'price_high_low') {
            $query->orderBy('price', 'desc');
        } elseif ($this->sortBy === 'price_low_high') {
            $query->orderBy('price', 'asc');
        }

        $products = $query->paginate(12);       

        $categories = Category::where('is_active', 1)->get();
        $categoryCounts = $this->brand->products()
            ->select('category_id', DB::raw('count(*) as total'))
            ->groupBy('category_id')
            ->pluck('total','category_id');

        return view('livewire.brands-page',[
            'brand' => $this->brand,
            'products' => $products,
            'categories' => $categories,
            'categoryCounts' => $categoryCounts,
        ]);
    }
}
