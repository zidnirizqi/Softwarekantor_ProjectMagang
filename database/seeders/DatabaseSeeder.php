<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create categories
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and gadgets',
                'status' => 'active'
            ],
            [
                'name' => 'Clothing',
                'description' => 'Fashion and apparel',
                'status' => 'active'
            ],
            [
                'name' => 'Books',
                'description' => 'Books and educational materials',
                'status' => 'active'
            ],
            [
                'name' => 'Home & Garden',
                'description' => 'Home improvement and garden supplies',
                'status' => 'active'
            ],
            [
                'name' => 'Sports',
                'description' => 'Sports equipment and accessories',
                'status' => 'active'
            ]
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        // Create sample products
        $products = [8,
            [
                'name' => 'Smartphone Android',
                'description' => 'Latest Android smartphone with high-end features',
                'price' => 5000000,
                'stock' => 25,
                'status' => 'active',
                'category_id' => 1,
            ],
            [
                'name' => 'Laptop Gaming',
                'description' => 'High performance gaming laptop',
                'price' => 15000000,
                'stock' => 10,
                'status' => 'active',
                'category_id' => 1,
            ],
            [
                'name' => 'Kaos Polo',
                'description' => 'Comfortable polo shirt made from premium cotton',
                'price' => 150000,
                'stock' => 50,
                'status' => 'active',
                'category_id' => 2,
            ],
            [
                'name' => 'Jeans Denim',
                'description' => 'Classic denim jeans for casual wear',
                'price' => 300000,
                'stock' => 30,
                'status' => 'active',
                'category_id' => 2,
            ],
            [
                'name' => 'Programming Book',
                'description' => 'Complete guide to modern programming',
                'price' => 250000,
                'stock' => 20,
                'status' => 'active',
                'category_id' => 3,
            ],
            [
                'name' => 'Garden Tools Set',
                'description' => 'Complete set of gardening tools',
                'price' => 450000,
                'stock' => 15,
                'status' => 'active',
                'category_id' => 4,
            ],
            [
                'name' => 'Soccer Ball',
                'description' => 'Professional quality soccer ball',
                'price' => 200000,
                'stock' => 40,
                'status' => 'active',
                'category_id' => 5,
            ],
            [
                'name' => 'Wireless Headphones',
                'description' => 'Bluetooth wireless headphones with noise cancellation',
                'price' => 800000,
                'stock' => 0,
                'status' => 'inactive',
                'category_id' => 1,
            ]
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}