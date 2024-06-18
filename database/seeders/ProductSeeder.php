<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ice Tea',
            'description' => 'Es TEh Manis',
            'price' => 10000,
            'image' => 'frontend/img/Iced Tea.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Mineral Water',
            'description' => 'Air Mineral',
            'price' => 7000,
            'image' => 'frontend/img/Mineral Water.jpg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'CocaCola',
            'description' => 'CocaCola',
            'price' => 5000,
            'image' => 'frontend/img/CocaCola.jpg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Sprite',
            'description' => 'Sprite',
            'price' => 5000,
            'image' => 'frontend/img/Sprite.png',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Hot Tea',
            'description' => 'Hot Tea',
            'price' => 5000,
            'image' => 'frontend/img/Hot Tea.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Hot Americano',
            'description' => 'Hot Americano',
            'price' => 25000,
            'image' => 'frontend/img/Hot Americano.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Ice Lemon Tea',
            'description' => 'Ice Lemon Tea',
            'price' => 8000,
            'image' => 'frontend/img/Iced Tea.jpg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Lemonade',
            'description' => 'Lemonade',
            'price' => 15000,
            'image' => 'frontend/img/Lemonade.jpg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Orange Juice',
            'description' => 'Jus Jeruk',
            'price' => 15000,
            'image' => 'frontend/img/Orange Juice.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Apple Juice',
            'description' => 'Jus Apel',
            'price' => 17000,
            'image' => 'frontend/img/Apple Juice.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Cranberry Juice',
            'description' => 'Jus Cranberry',
            'price' => 20000,
            'image' => 'frontend/img/Crunberry Juice.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Manggo Juice',
            'description' => 'Jus Mangga',
            'price' => 15000,
            'image' => 'frontend/img/Mango Juice.jpg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Avocado Juice',
            'description' => 'Jus Alpukat',
            'price' => 20000,
            'image' => 'frontend/img/Avocado Juice.jpg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Hot/Ice Chocolate',
            'description' => 'Es Coklat/Panas Coklat',
            'price' => 17000,
            'image' => 'frontend/img/HotIce Chocolate.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Milkshake Vanilla',
            'description' => 'Susu Vanilla Kocok',
            'price' => 19000,
            'image' => 'frontend/img/Milkshake Vanilla.jpg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Milkshake Chocolate',
            'description' => 'Susu Coklat Kocok',
            'price' => 19000,
            'image' => 'frontend/img/Milkshake Chocolate.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Milkshake Strawberry',
            'description' => 'Susu Stroberi Kocok',
            'price' => 19000,
            'image' => 'frontend/img/Milkshake Strawberry.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Latte',
            'description' => 'Latte',
            'price' => 26000,
            'image' => 'frontend/img/Latte.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Cappucino',
            'description' => 'Cappuccino',
            'price' => 25000,
            'image' => 'frontend/img/cappuccino.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Expresso',
            'description' => 'Expresso',
            'price' => 27000,
            'image' => 'frontend/img/Expresso.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Sparkling Water',
            'description' => 'Sparkling Water',
            'price' => 18000,
            'image' => 'frontend/img/Sparkling Water.jpeg',
            'category' => Product::CATEGORY_DRINK
        ]);
        Product::create([
            'name' => 'Classic Breakfast Platter',
            'description' => 'Menu Sarapan',
            'price' => 200000,
            'image' => 'frontend/img/Classic Breakfast Platter.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Pancake Stack',
            'description' => 'Menu Sarapan',
            'price' => 125000,
            'image' => 'frontend/img/Pancake Stack.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Oatmeal Bowl',
            'description' => 'Menu Sarapan',
            'price' => 90000,
            'image' => 'frontend/img/Oatmeal Bowl.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Avocado Toast',
            'description' => 'Menu Sarapan',
            'price' => 125000,
            'image' => 'frontend/img/Avocado Toast.jpeg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Smoothie Bowl',
            'description' => 'Menu Sarapan',
            'price' => 95000,
            'image' => 'frontend/img/Smoothie Bowl.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Yogurt Parfait',
            'description' => 'Menu Sarapan',
            'price' => 225000,
            'image' => 'frontend/img/Yogurt Parfait.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'English Breakfast',
            'description' => 'Menu Sarapan',
            'price' => 199000,
            'image' => 'frontend/img/English Breakfast.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Crispy Bacon and Cheese Waffles',
            'description' => 'Menu Sarapan',
            'price' => 105000,
            'image' => 'frontend/img/Crispy Bacon and Cheese Waffles.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Grilled Chicken Salad',
            'description' => 'Menu Makan Siang',
            'price' => 165000,
            'image' => 'frontend/img/Grilled Chicken Salad.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Classic Burger',
            'description' => 'Menu Makan Siang',
            'price' => 55000,
            'image' => 'frontend/img/Classic Burger.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Vegetable Stir-fry',
            'description' => 'Menu Makan Siang',
            'price' => 200,
            'image' => 'frontend/img/Vegetable Stir-fry.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Soup and Sandwich Combo',
            'description' => 'Menu Makan Siang',
            'price' => 95000,
            'image' => 'frontend/img/Soup and Sandwich Combo.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Stuffed Bell Peppers',
            'description' => 'Menu Makan Siang',
            'price' => 225000,
            'image' => 'frontend/img/Stuffed Bell Peppers.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Margherita Pizza',
            'description' => 'Menu Makan Siang',
            'price' => 150000,
            'image' => 'frontend/img/Margherita Pizza.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Bento Box',
            'description' => 'Menu Makan Siang',
            'price' => 165000,
            'image' => 'frontend/img/Bento Box.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Pasta Carbonara',
            'description' => 'Menu Makan Siang',
            'price' => 125000,
            'image' => 'frontend/img/Pasta Carbonara.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Grilled Salmon Fillet',
            'description' => 'Menu Makan Malam',
            'price' => 275000,
            'image' => 'frontend/img/Grilled Salmon Fillet.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Pasta Aglio e Olio',
            'description' => 'Menu Makan Malam',
            'price' => 150000,
            'image' => 'frontend/img/Pasta Aglio e Olio.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Steak with Mashed Potatoes',
            'description' => 'Menu Makan Malam',
            'price' => 270000,
            'image' => 'frontend/img/Steak with Mashed Potatoes.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Vegetarian Buddha Bowl',
            'description' => 'Menu Makan Malam',
            'price' => 150000,
            'image' => 'frontend/img/Vegetarian Buddha Bowl.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Duck Confit',
            'description' => 'Menu Makan Malam',
            'price' => 175000,
            'image' => 'frontend/img/Duck Confit.jpeg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Lamb Chops',
            'description' => 'Menu Makan Malam',
            'price' => 250000,
            'image' => 'frontend/img/Lamb Chops.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
        Product::create([
            'name' => 'Risotto',
            'description' => 'Description 2',
            'price' => 125000,
            'image' => 'frontend/img/Risotto.jpg',
            'category' => Product::CATEGORY_FOOD
        ]);
    }
}
