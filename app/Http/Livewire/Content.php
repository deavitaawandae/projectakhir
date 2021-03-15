<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use Livewire\WithPagination;

class Content extends Component
{
    use WithPagination;

    public $search;
    public $category = [
        'Makanan Ringan' => 'Makanan Ringan',
        'Makanan Sedang' => 'Makanan Sedang',
        'Makanan Berat' => 'Makanan Berat',
        'Dessert' => 'Dessert',
        'Air Putih' => 'Air Putih',
        'Es' => 'Es',
        'Minuman Panas' => 'Minuman Panas',
        'Lainnya' => 'Lainnya',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $recipe = Recipe::latest()->paginate(8);
        return view('livewire.content', ['recipe' => $recipe, 'category'  => $this->category])->extends('layouts.app');
    }
}
