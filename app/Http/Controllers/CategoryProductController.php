<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Returns a page with products by category
     * @return \Illumintate\Http\Response
     */
    public function showProducts($category, $id)
    {
        $products = $this->marketService->getCategoryProducts($id);

        return view('categories.products.show')->with([
            'products' => $products
        ]);
    }
}
