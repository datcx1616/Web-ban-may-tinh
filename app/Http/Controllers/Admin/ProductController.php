<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show list product
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index ()
    {
        $products = Product::select('products.*', 'categories.name as category_name')
            ->join('categories', 'products.id_category', 'categories.id')
            ->get();
        return view('admin.product.index',
        [ "listProduct" => $products]);
    }

    /**
     * Show form create product
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create ()
    {
        $categories = Category::get();
        return view('admin.product.create', [
            "listCategory" => $categories
        ]);
    }

    /**
     * Handle create product
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $uploadedImages = [];

        // Kiểm tra và upload các ảnh
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $uploadedImages[] = $this->uploadFile($file, 'product'); // Upload từng file và lưu đường dẫn
            }
        }

        // Chuẩn bị dữ liệu lưu vào cơ sở dữ liệu
        $data = [
            "id_category" => $request->id_category,
            "name" => $request->name,
            "image" => json_encode($uploadedImages), // Chuyển mảng ảnh thành JSON
            "price" => $request->price,
            "describe" => $request->describe,
            "screen" => $request->screen,
            "cpu" => $request->cpu,
            "card" => $request->card,
            "battery" => $request->battery,
            "mass" => $request->mass,
            "ram" => $request->ram,
            "memory" => $request->memory,
            "so_luong" => $request->so_luong,
            "quantity" => $request->quantity,
        ];

        if ($request->isSale == '1') {
            $data['sale'] = $request->sale;
            $data['sale_start'] = Carbon::parse($request->saleStart);
            $data['sale_end'] = Carbon::parse($request->saleEnd);
        }
        Product::create($data);
        return redirect()->route('admin.product.index');
    }

    /**
     * Show form edit product
     *
     * @param integer $id product
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $categories = Category::get();
        $product = Product::findOrFail($id);
        return view("admin.product.edit",[
            "itemProduct" => $product,
            "listCategory" => $categories,
        ]);
    }

    /**
     * Handle update product
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);

        $product->name = $request->name;

        $existingImages = json_decode($product->image, true);
        if (!is_array($existingImages)) {
            $existingImages = []; // Đảm bảo rằng luôn là mảng
        }

        if ($request->has('changeImage')) {
            $uploadedImages = [];
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $file) {
                    $uploadedImages[] = $this->uploadFile($file, 'product'); // Tải lên và lấy đường dẫn ảnh
                }
            }
            $allImages = $uploadedImages; // Chỉ sử dụng ảnh mới
        } else {
            $allImages = $existingImages;
        }

        $product->image = json_encode($allImages);
        $product->price = $request->price;
        $product->describe = $request->describe;
        $product->screen = $request->screen;
        $product->cpu = $request->cpu;
        $product->card = $request->card;
        $product->battery = $request->battery;
        $product->mass = $request->mass;
        $product->so_luong = $request->so_luong;
        $product->quantity = $request->quantity;
        if ($request->isSale == '1') {
            $product->sale = $request->sale;
            $product->sale_start = Carbon::parse($request->saleStart);
            $product->sale_end = Carbon::parse($request->saleEnd);
        }
        $product->save();

        return redirect()->route('admin.product.index');
    }

    /**
     * Handle delete post
     *
     * @param integer $id post
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
