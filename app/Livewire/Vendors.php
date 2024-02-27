<?php

namespace App\Livewire;

use App\Models\Vendor;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Vendors extends Component
{
    #[Rule('required')]
    public string $name = '';

    #[Rule('required')]
    public string $slug = '';

    #[Rule('required')]
    public string $address = '';

    public function save()
    {
        $this->validate();

        Vendor::create(
            $this->only(['name', 'slug','address'])
        );

        return $this->redirect('/vendors');
    }

    public function render()
    {
        return view('livewire.vendo.vendors');
    }
}
