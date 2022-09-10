<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public $search =  '';
    protected $queryString = ['search'];    // livewire component to monitor url

    public function render()
    {
        $query = Product::query();

        if ($this->search) {
            $query->where('title', 'like', "%{$this->search}%");
        }
        return view('livewire.product-search', [
            'products' => $query->paginate(20)
        ]);
    }

    public function updated($property)
    {
        if ($property === 'search')
            $this->resetPage();
    }
}
