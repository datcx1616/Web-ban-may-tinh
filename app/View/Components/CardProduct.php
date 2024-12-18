<?php

namespace App\View\Components;

use Closure;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = Product::take(8)->orderBy('created_at', 'desc')->get();
        return view('components.card-product',[
            'products'=>$products
        ]);
    }
}