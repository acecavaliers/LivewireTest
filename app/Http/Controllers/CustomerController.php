<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class CustomerController extends Controller
{

    public function index()
    {
        return view('project.customer.index');
    }

    public function create()
    {
        return view('project.customer.create');
    }
}
