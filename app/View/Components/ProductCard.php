<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $product;
    public $lg;
    public $isSale;
    public $salePrice;

    /**
     * Create a new component instance.
     */
    public function __construct($product, $lg = 3)
    {
        $this->product = $product;
        $this->lg = $lg;
        $this->isSale = isDiscount($product->sale_start, $product->sale_end);
        if ($this->isSale) {
            $this->salePrice = calcSalePrice($product->price, $product->sale) ?? $product->price;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}