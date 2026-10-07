<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductCreate extends Component
{
    public $name;
    public $price;
    public $detail;
    public $category;
    public $categories = [];
    public function render()
    {
        return view('livewire.product-create');
    }
    public function submit(){
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required',
            'category' => 'nullable'
        ]);
       $product = Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'detail' => $this->detail,
            'category' => $this->category
        ]);
        Info($product);
    }
    public function resetInputFields(){
        $this->name = '';
        $this->price = '';
        $this->detail = '';
        $this->category = '';
    }
    public function loadCategories(){
        Info('loadCategories called');

        $categories = Product::all();
        // dd($categories);
        $this->categories = $categories;

    }
}
