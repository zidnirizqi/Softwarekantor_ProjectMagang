<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brands = [
        ['id' => 1, 'name' => 'Nike', 'description' => 'Brand olahraga terkenal'],
        ['id' => 2, 'name' => 'Adidas', 'description' => 'Brand olahraga Jerman'],
        ['id' => 3, 'name' => 'Puma', 'description' => 'Brand sepatu dan pakaian'],
        ['id' => 4, 'name' => 'Mills', 'description' => 'Brand sepatu dan pakaian lokal'],
    ];

    public function index()
    {
        $brands = $this->brands;
        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.brand.index')->with('success', 'Brand created successfully');
    }

    public function edit($id)
    {
        $brand = collect($this->brands)->firstWhere('id', $id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.brand.index')->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.brand.index')->with('success', 'Brand deleted successfully');
    }
}
