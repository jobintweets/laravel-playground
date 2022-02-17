<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         Brand::create([
   'brand_name' => 'Adidas'
  ]);

  Brand::create([
    'brand_name' => 'Nike'
  ]);

  Brand::create([
   'brand_name' => 'Specs'
  ]);
  
  Brand::create([
   'brand_name' => 'Puma'
  ]);

    }
}
