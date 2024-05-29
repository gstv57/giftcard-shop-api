<?php

namespace Database\Seeders\Development;

use App\Models\Cart;
use App\Models\Category;
use App\Models\ItemCart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // criar categoria
        $category = Category::factory()->create();

        // criar produto
        $product = Product::factory()->create([
            'category_id' => $category->id,
        ]);
        // criar carrinho
        $cart = Cart::factory()->create();

        $itemCarrinho = ItemCart::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'quantidade' => 1,
        ]);
        // criar pedido
        $order = Order::factory()->create([
            'user_id' => $cart->user_id,
            'total' => $product->valor,
            'status' => 'pending',
            'metodo_pagamento' => 'credit_card',
        ]);
    }
}
