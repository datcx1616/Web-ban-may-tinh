<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class ProductCategory extends Component
{
    public $listCategory;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Lấy danh sách danh mục từ database
        $this->listCategory = Category::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function  render()
    {
        // Truyền biến $listCategory sang view
        return view('components.product-category', [
            'listCategory' => $this->listCategory,
        ]);
    }
}
