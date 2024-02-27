<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Brick\Math\BigNumber;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Ramsey\Uuid\Type\Decimal;
use Ramsey\Uuid\Type\Integer;

class Create extends Component
{
    #[Rule('required')]
    public string $name = '';

    #[Rule('required')]
    public string $slug = '';

    #[Rule('required')]
    public string $address = '';

    #[Rule('required')]
    public float $credit_limit = 0;

    public function save()
    {
        $this->validate();

        Customer::create(
            $this->only(['name', 'slug','address','credit_limit'])
        );

        return $this->redirect('/cuscus/create');
    }
    public function render()
    {
        return view('livewire.customer.create');
    }
}


