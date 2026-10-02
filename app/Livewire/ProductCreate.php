<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductCreate extends Component
{
    public $name;
    public $price;
    public $detail;
    public function render()
    {
        return view('livewire.product-create');
    }
    public function submit(){
        $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required'
        ]);
       $product = Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'detail' => $this->detail
        ]);
        Info($product);
    }
}
