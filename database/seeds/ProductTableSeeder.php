<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagepath'=>'http://ecx.images-amazon.com/images/I/71A2pxQc3XL._UL1500_.jpg',
        	'title'=>'Mans Shirt',
        	'description'=>'100% Cotton shirt',
        	'price'=>'1050'
        	]);
        $product->save();

          $product = new \App\Product([
        	'imagepath'=>'https://4.imimg.com/data4/DO/YR/GLADMIN-186114/mens-fashion-shirt-250x250.jpg',
        	'title'=>'Mans Shirt',
        	'description'=>'100% Cotton shirt',
        	'price'=>'850'
        	]);
        $product->save();


          $product = new \App\Product([
        	'imagepath'=>'http://ecx.images-amazon.com/images/I/41FSPsnGvOL._AC_UL260_SR200,260_.jpg',
        	'title'=>'Mans Shirt',
        	'description'=>'100% Cotton shirt',
        	'price'=>'1150'
        	]);
        $product->save();

             $product = new \App\Product([
        	'imagepath'=>'http://ecx.images-amazon.com/images/I/71aqThKZz0L._UL1500_.jpg',
        	'title'=>'POLO T-Shirt',
        	'description'=>'100% Cotton shirt',
        	'price'=>'1200'
        	]);
        $product->save();


          $product = new \App\Product([
        	'imagepath'=>'http://ecx.images-amazon.com/images/I/41LldhsLJPL._AC_UL260_SR200,260_.jpg',
        	'title'=>'Mans Shirt',
        	'description'=>'100% Cotton shirt',
        	'price'=>'780'
        	]);
        $product->save();

        $product = new \App\Product([
            'imagepath'=>'https://sc01.alicdn.com/kf/HTB1J8fJJVXXXXbRXVXXq6xXFXXXu/Wholesale-walson-D95435T-2015-top-grade-latest.jpg',
            'title'=>'Mans Shirt',
            'description'=>'Stylish shirt',
            'price'=>'1500'
            ]);
        $product->save();

         $product = new \App\Product([
            'imagepath'=>'http://www.dhresource.com/260x260s/f2-albu-g4-M01-9A-63-rBVaEVeXACqAXj4oAAEuK-GyDgM276.jpg/the-latest-running-shirts-pattern-for-men.jpg',
            'title'=>'Mans T-Shirt',
            'description'=>'Stylish T-shirt',
            'price'=>'800'
            ]);
        $product->save();

    
    }
}
