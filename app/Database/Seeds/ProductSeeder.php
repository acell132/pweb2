<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'category_id' => 1,
                'name' => 'Premium Portland Cement',
                'slug' => 'premium-portland-cement',
                'description' => 'High-strength cement suitable for construction and building foundation structures.',
                'price' => 45999,
                'stock' => 120,
                'rating' => 4.5,
                'is_featured' => true,
                'status' => 'active',
            ],
            [
                'category_id' => 1,
                'name' => 'Steel Rebar Set (10 pcs)',
                'slug' => 'steel-rebar-set',
                'description' => 'Durable steel bars for reinforced concrete structures.',
                'price' => 189999,
                'stock' => 80,
                'rating' => 4.7,
                'is_featured' => true,
                'status' => 'active',
            ],
            [
                'category_id' => 2,
                'name' => 'Professional Power Drill',
                'slug' => 'professional-power-drill',
                'description' => 'Cordless drill ideal for construction and industrial use.',
                'price' => 299999,
                'stock' => 50,
                'rating' => 4.8,
                'is_featured' => false,
                'status' => 'active',
            ],
            [
                'category_id' => 3,
                'name' => 'Safety Helmet Set',
                'slug' => 'safety-helmet-set',
                'description' => 'Certified construction helmets with adjustable straps.',
                'price' => 24999,
                'stock' => 150,
                'rating' => 4.3,
                'is_featured' => false,
                'status' => 'active',
            ],
            [
                'category_id' => 2,
                'name' => 'Heavy Duty Circular Saw',
                'slug' => 'heavy-duty-circular-saw',
                'description' => 'Industrial-strength circular saw for precise wood and metal cutting.',
                'price' => 499999,
                'stock' => 35,
                'rating' => 4.9,
                'is_featured' => true,
                'status' => 'active',
            ],
            [
                'category_id' => 3,
                'name' => 'Construction Safety Gloves',
                'slug' => 'construction-safety-gloves',
                'description' => 'Durable anti-slip gloves for worker safety and heavy-duty handling.',
                'price' => 19999,
                'stock' => 200,
                'rating' => 4.4,
                'is_featured' => false,
                'status' => 'active',
            ],
            [
                'category_id' => 1,
                'name' => 'High-Grade Sand (25 Kg)',
                'slug' => 'high-grade-sand-25kg',
                'description' => 'Clean refined sand ideal for building and plaster mix.',
                'price' => 14999,
                'stock' => 300,
                'rating' => 4.2,
                'is_featured' => true,
                'status' => 'active',
            ],
            [
                'category_id' => 2,
                'name' => 'Adjustable Pipe Wrench',
                'slug' => 'adjustable-pipe-wrench',
                'description' => 'Strong steel wrench made for plumbing and pipework adjustment.',
                'price' => 79999,
                'stock' => 60,
                'rating' => 4.6,
                'is_featured' => false,
                'status' => 'active',
            ],
            [
                'category_id' => 3,
                'name' => 'Reflective Safety Vest',
                'slug' => 'reflective-safety-vest',
                'description' => 'High-visibility safety vest suitable for construction workers.',
                'price' => 29999,
                'stock' => 100,
                'rating' => 4.5,
                'is_featured' => false,
                'status' => 'active',
            ],

        ];

        // insert batch
        $this->db->table('products')->insertBatch($products);
    }
}
