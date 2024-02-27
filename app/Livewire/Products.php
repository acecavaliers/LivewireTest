<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $search ='';

    public function render()
    {
        // sleep(1);
        return view('livewire.product.products',[
            'products'=>Product::search($this->search)->paginate(15)
        ]);
    }
}
