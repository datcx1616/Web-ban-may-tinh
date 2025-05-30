<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ProductRelated extends Component
{
    protected $currID;
    /**
     * Create a new component instance.
     */
    public function __construct($currID = 0)
    {
        $this->currID = $currID;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = Product::query();
        if ($this->currID) {
            $products = $products
                ->leftJoin(
                    DB::raw('(
                        SELECT productID, SUM(quantity) AS total_quantity FROM order_details
                        GROUP BY productID
                    ) AS total'),
                    'products.id', 'total.productID'
                )
                ->where('id', '!=', $this->currID);
        }
        return view('components.product-related', [
            'products' => $products->take(8)->get()
        ]);
    }
}