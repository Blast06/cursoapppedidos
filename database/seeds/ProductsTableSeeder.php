<?php

use App\Product;
use App\Category;
use App\ProductImage;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Category::class,5)->create();
        // factory(Product::class,100)->create();
        // factory(ProductImage::class,200)->create();


        //Otra manera de poblar las tablas es esta, de esta manera
        //se asegura de que no queden categorias, productos o imagenes sin nada.

        $categories = factory(Category::class,5)->create();
        $categories->each(function($category){
            $products = factory(Product::class,20)->make();
            $category->products()->saveMany($products);

            $products->each(function ($p ){
                $images = factory(ProductImage::class,5)->create();
                $p->images()->saveMany($images);

            });
        });
    }
}
