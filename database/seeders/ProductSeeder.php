<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Kisra with Bamia', 'category' => 'South Sudanese Food', 'description' => 'Thin sorghum flatbread served with okra stew.', 'price' => 400, 'is_available' => true],
            ['name' => 'Asida with Mulah', 'category' => 'South Sudanese Food', 'description' => 'Soft sorghum dough served with a rich meat stew.', 'price' => 450, 'is_available' => true],
            ['name' => 'Ful Medames', 'category' => 'South Sudanese Food', 'description' => 'Slow-cooked fava beans with oil, onions and fresh bread.', 'price' => 300, 'is_available' => true],
            ['name' => 'Grilled Tilapia', 'category' => 'South Sudanese Food', 'description' => 'Whole fish grilled with spices, served with kisra or rice.', 'price' => 650, 'is_available' => true],
            ['name' => 'Jebena Spiced Coffee', 'category' => 'Drinks', 'description' => 'Traditional coffee brewed with ginger and cardamom.', 'price' => 150, 'is_available' => true],
            ['name' => 'Karkade (Hibiscus)', 'category' => 'Drinks', 'description' => 'Chilled hibiscus drink, tangy and refreshing.', 'price' => 150, 'is_available' => true],
            ['name' => 'Dawa Tea', 'category' => 'Drinks', 'description' => 'Ginger, honey and lemon hot drink.', 'price' => 220, 'is_available' => true],
            ['name' => 'Beef Pilau', 'category' => 'International Menu', 'description' => 'Fragrant spiced rice cooked with tender beef.', 'price' => 450, 'is_available' => true],
            ['name' => 'Burger & Fries', 'category' => 'International Menu', 'description' => 'Juicy beef burger with cheese, salad and crispy fries.', 'price' => 600, 'is_available' => true],
            ['name' => 'Margherita Pizza', 'category' => 'International Menu', 'description' => 'Tomato, mozzarella and fresh basil on a thin crust.', 'price' => 800, 'is_available' => true],
            ['name' => 'Chicken Shawarma', 'category' => 'International Menu', 'description' => 'Marinated chicken wrap with garlic sauce and pickles.', 'price' => 550, 'is_available' => true],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['name' => $product['name']], $product);
        }
    }
}