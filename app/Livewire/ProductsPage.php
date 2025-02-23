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

#[Title('Products | TechHaven ')]

class ProductsPage extends Component
{
    use WithPagination;
    use LivewireAlert;

    #[Url()]
    public $selected_categories = [];

    #[Url()]
    public $selected_brands = [];

    #[Url]
    public $featured;

    #[Url]
    public $on_sale;

    #[Url]
    public $new_arrival;

    #[Url]
    public $price_range = 300000;

    #[Url()]
    public $sortBy = 'latest';

    public function updatedSelectedCategories()
    {
        $this->resetPage();
    }

    public function updatedSelectedBrands()
    {
        $this->resetPage();
    }

    public function updatedFeatured()
    {
        $this->resetPage();
    }

    public function updatedOnSale()
    {
        $this->resetPage();
    }

    public function updatedNewArrival()
    {
        $this->resetPage();
    }

    public function updatedPriceRange()
    {
        $this->resetPage();
    }

    public function updatedSortBy()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset('selected_categories');
        $this->reset('selected_brands');
        $this->reset('price_range');
        $this->reset('featured');
        $this->reset('on_sale');
        $this->reset('new_arrival');
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
        $productQuery = Product::query()->where('is_active',1);

        if(!empty($this->selected_categories)){
            $productQuery->whereIn('category_id',$this->selected_categories);
        }

        if(!empty($this->selected_brands)){
            $productQuery->whereIn('brand_id',$this->selected_brands);
        }

        if($this->featured){
            $productQuery->where('is_featured',1);
        }

        if($this->on_sale){
            $productQuery->where('on_sale',1);
        }

        if($this->new_arrival){
            $productQuery->where('is_new_arrival',1);
        }

        if($this->price_range){
            $productQuery->whereBetween('price',[0, $this->price_range]);
        }

        if ($this->sortBy === 'latest') {
            $productQuery->orderBy('created_at', 'desc');
        } elseif ($this->sortBy === 'price_high_low') {
            $productQuery->orderBy('price', 'desc');
        } elseif ($this->sortBy === 'price_low_high') {
            $productQuery->orderBy('price', 'asc');
        }

        $categories = Category::where('is_active',1)->get(['id', 'name', 'slug']);
        $categoryCounts = Product::where('is_active',1)
            ->select('category_id', DB::raw('count(*) as total'))
            ->groupBy('category_id')
            ->pluck('total','category_id');

        $brands = Brand::where('is_active',1)->get(['id', 'name', 'slug']);
        $brandCounts = Product::where('is_active',1)
            ->select('brand_id', DB::raw('count(*) as total'))
            ->groupBy('brand_id')
            ->pluck('total','brand_id');
        
        $featuredCounts = Product::where('is_featured',1)
            ->count();
        $onSaleCounts = Product::where('on_sale',1)
            ->count();
        $newArrivals = Product::where('is_new_arrival',1)
            ->count();

        return view('livewire.products-page',[
            'products' => $productQuery->paginate(4),
            'categories' => $categories,
            'brands'=> $brands,
            'categoryCounts' => $categoryCounts,
            'brandCounts' => $brandCounts,
            'featuredCounts' => $featuredCounts,
            'onSaleCounts' => $onSaleCounts,
            'newArrivals' => $newArrivals,
        ]);
    }
}
