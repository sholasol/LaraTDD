<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_product_page_contains_empty_table(): void
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('products');

        $response->assertStatus(200);

        $response->assertSee('No Records at this moment');
    }

    public function test_product_does_not_contain_empty_table()
     {
        $product = Product::create([
            'name' => 'Trainers',
            'price' => 150,
            'quantity' => 12,
            'image' => 'https://images.pexels.com/photos/12730141/pexels-photo-12730141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
        ]);

        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('products');

        $response->assertStatus(200);

         $response->assertSee('Trainers');

        $response->assertViewHas('products', function($collection) use ($product) {
            return $collection->contains($product);
        });
    }
}