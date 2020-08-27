<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductImage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){


    	$name_list = [
    		"Men Leather Shoes 1",
    		"Men Leather Shoes 2",
    		"Men Leather Shoes 3",
    		"Men Leather Shoes 4",
    		"Men Leather Shoes 5",

    		"Women Leather Shoes 1",
    		"Women Leather Shoes 2",
    		"Women Leather Shoes 3",
    		"Women Leather Shoes 4",
    		"Women Leather Shoes 5",

    		"kids Toy 1",
    		"kids Toy 2",
    		"kids Toy 3",
    		"kids Toy 4",
    		"kids Toy 5",

    		"Boy T-Shirt 1",
    		"Boy T-Shirt 2",
    		"Boy T-Shirt 3",
    		"Boy T-Shirt 4",
    		"Boy T-Shirt 5",

    		"Boy Shirt 1",
    		"Boy Shirt 2",
    		"Boy Shirt 3",
    		"Boy Shirt 4",
    		"Boy Shirt 5",

    		"Boy Gym Products 1",
    		"Boy Gym Products 2",
    		"Boy Gym Products 3",
    		"Boy Gym Products 4",
    		"Boy Gym Products 5",

    		"Boy Panjabi 1",
    		"Boy Panjabi 2",
    		"Boy Panjabi 3",
    		"Boy Panjabi 4",
    		"Boy Panjabi 5",


    		"Girl T-Shirt 1",
    		"Girl T-Shirt 2",
    		"Girl T-Shirt 3",
    		"Girl T-Shirt 4",
    		"Girl T-Shirt 5",

    		"Girl Sari 1",
    		"Girl Sari 2",
    		"Girl Sari 3",
    		"Girl Sari 4",
    		"Girl Sari 5",

    		"Girl Dress 1",
    		"Girl Dress 2",
    		"Girl Dress 3",
    		"Girl Dress 4",
    		"Girl Dress 5",

    		"Girl Makeup 1",
    		"Girl Makeup 2",
    		"Girl Makeup 3",
    		"Girl Makeup 4",
    		"Girl Makeup 5"

    		
    	];


    	$base_image = [
    		"men-leather-shoes-1.jpg",
    		"men-leather-shoes-2.jpg",
    		"men-leather-shoes-3.jpg",
    		"men-leather-shoes-4.jpg",
    		"men-leather-shoes-5.jpg",

    		"women-leather-shoes-1.jpg",
    		"women-leather-shoes-2.jpg",
    		"women-leather-shoes-3.jpg",
    		"women-leather-shoes-4.jpg",
    		"women-leather-shoes-5.jpg",

    		"kids-toy-1.jpg",
    		"kids-toy-2.jpg",
    		"kids-toy-3.jpg",
    		"kids-toy-4.jpg",
    		"kids-toy-5.jpg",

    		"boy-t-shirt-1.jpg",
    		"boy-t-shirt-2.jpg",
    		"boy-t-shirt-3.jpg",
    		"boy-t-shirt-4.jpg",
    		"boy-t-shirt-5.jpg",

    		"boy-shirt-1.jpg",
    		"boy-shirt-2.jpg",
    		"boy-shirt-3.jpg",
    		"boy-shirt-4.jpg",
    		"boy-shirt-5.jpg",

    		"boy-gym-Products-1.jpg",
    		"boy-gym-Products-2.jpg",
    		"boy-gym-Products-3.jpg",
    		"boy-gym-Products-4.jpg",
    		"boy-gym-Products-5.jpg",

    		"boy-panjabi-1.jpg",
    		"boy-panjabi-2.jpg",
    		"boy-panjabi-3.jpg",
    		"boy-panjabi-4.jpg",
    		"boy-panjabi-5.jpg",

    		"girl-t-shirt-1.jpg",
    		"girl-t-shirt-2.jpg",
    		"girl-t-shirt-3.jpg",
    		"girl-t-shirt-4.jpg",
    		"girl-t-shirt-5.jpg",

    		"girl-sari-1.jpg",
    		"girl-sari-2.jpg",
    		"girl-sari-3.jpg",
    		"girl-sari-4.jpg",
    		"girl-sari-5.jpg",

    		"girl-dress-1.jpg",
    		"girl-dress-2.jpg",
    		"girl-dress-3.jpg",
    		"girl-dress-4.jpg",
    		"girl-dress-5.jpg",

    		"girl-makeup-1.jpg",
    		"girl-makeup-2.jpg",
    		"girl-makeup-3.jpg",
    		"girl-makeup-4.jpg",
    		"girl-makeup-5.jpg"
    	];


		$slider_img = [
			"men-leather-shoes-large-",
	

			"women-leather-shoes-large-",
			

			"kids-toy-large-",
		

			"boy-t-shirt-large-",
		

			"boy-shirt-large-",
		

	        "boy-gym-products-large-",
	        

			"boy-panjabi-large-",



			
			"girl-t-shirt-large-",
			

			"girl-sari-large-",
			

			"girl-dress-large-",
		

			"girl-makeup-large-",
				
	    ];



	    $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea non error, perspiciatis deleniti adipisci natus a sit recusandae molestiae voluptates, illum ipsa nemo assumenda amet veniam quae minus fuga alias, accusantium, illo libero. Harum repudiandae est iusto quidem iste eum, ipsum, id, repellendus cum minus voluptates aperiam cupiditate vero, odio repellat cumque pariatur itaque maiores temporibus suscipit modi ea. Adipisci a ea nobis alias eveniet repudiandae, sequi velit, impedit repellendus eius veritatis, non natus nisi vel aliquam corporis, aut blanditiis dolore! Optio aspernatur ducimus excepturi inventore explicabo magnam suscipit, ex nobis quos doloribus fugit molestiae eligendi tenetur amet, eum veritatis!";


	    $attr = '
		    	<p><b>Color: </b></p>
				<ul>
					<li>Red</li>
					<li>Green</li>
					<li>Blue</li>
				</ul>

		    	<p><b>Size: </b></p>
				<ul>
					<li>XL</li>
					<li>M</li>
					<li>S</li>
					<li>XXL</li>
				</ul>
	    ';

	    $tag_line = ['new','hot','off'];



	    $slider_img_index = 0;

	    // for($i=0;$i<55;$i++){

	    // 	$product = new Product;

	    // 	$product->code 				= "NE-P-".$i;
	    // 	$product->user_id 			= 1;
	    // 	$product->view 				= 100;
	    // 	$product->name 				= $name_list[$i];
	    // 	$product->slug 				= str_replace(" ","-",strtolower($name_list[$i]));
	    // 	$product->image 			= $base_image[$i];
	    // 	$product->price 			= rand(1000,2500);
	    // 	$product->stock 			= rand(50,150);
	    // 	$product->description 		= $description;
	    // 	$product->attributes 		= $attr;
	    // 	$product->discount 		    = rand(0,35);
	    // 	$product->shipping_cost     = rand(50,80);
	    // 	$product->active     		= 1;
	    // 	$product->available     	= 1;
	    // 	$product->tag_line     		= $tag_line[rand(0,2)];
	    // 	$product->home_show     	= 1;

	    // 	$product->save();


	    // 	$product_id = $i+1;

	    // 	if($i<5){
	    // 		$category_id = 1; // Men

	    // 	}else if($i<10){
	    // 		$category_id = 2; // Women

	    		
	    // 	}else if($i<15){
	    // 		$category_id = 3; // Kids

	    // 	}else if($i<35){
	    // 		$category_id = 4; // Boy

	    // 	}else{
	    // 		$category_id = 5; // Girl

	    // 	}

	    // 	DB::table('category_product')->insert([
	    //        'category_id' => $category_id, 
	    //        'product_id'  => $product_id
	    //     ]);




	    	


	    // 	if($i<5){
	    // 		$slider_img_index = 0;
	    // 	}else if($i<10){
	    // 		$slider_img_index = 1;
	    // 	}else if($i<15){
	    // 		$slider_img_index = 2;
	    // 	}else if($i<20){
	    // 		$slider_img_index = 3;
	    // 	}else if($i<25){
	    // 		$slider_img_index = 4;
	    // 	}else if($i<30){
	    // 		$slider_img_index = 5;
	    // 	}else if($i<35){
	    // 		$slider_img_index = 6;
	    // 	}else if($i<40){
	    // 		$slider_img_index = 7;
	    // 	}else if($i<45){
	    // 		$slider_img_index = 8;
	    // 	}else if($i<50){
	    // 		$slider_img_index = 9;
	    // 	}else if($i<55){
	    // 		$slider_img_index = 10;
	    // 	}



	    // 	$slider = new ProductImage;

	    // 	$slider->product_id = $product_id;
	    // 	$slider->image = $slider_img[$slider_img_index]."1.jpg";
	    // 	$slider->save();

	    // 	$slider = new ProductImage;

	    // 	$slider->product_id = $product_id;
	    // 	$slider->image = $slider_img[$slider_img_index]."2.jpg";
	    // 	$slider->save();






	    // } // end for loop



        $name = [
            'boy',
            'girls',
            'men',
            'women',
            'kids'
        ];


        for($i=0;$i<5;$i++){
            for($j=1;$j<=20;$j++){
                 $product = new Product;

                 $tag_line_value = $tag_line[rand(0,2)];

                 if($tag_line_value == 'off'){
                    $discount = rand(0,35);
                 }else{
                    $discount = 0;
                 }

                 $product->code              = "DoDo-P-".$i.'-'.$j;
                 $product->user_id           = 1;
                 $product->view              = 100;
                 $product->rating            = rand(2,5);
                 $product->name              = $name[$i].' Shoes-'.$j;
                 $product->slug              = str_replace(" ","-",strtolower($name[$i].' Shoes-'.$j));
                 $product->image             = $name[$i].'-'.$j.'.jpg';
                 $product->price             = rand(1000,2500);
                 $product->stock             = rand(50,150);
                 $product->description       = $description;
                 $product->attributes        = $attr;
                 $product->discount          = $discount;
                 $product->shipping_cost     = rand(50,80);
                 $product->active            = 1;
                 $product->available         = 1;
                 $product->tag_line          = $tag_line_value;
                 $product->home_show         = 1;

                 $product->save();



                  DB::table('category_product')->insert([
                     'product_id' => $product->id,
                     'category_id'=> ($i+1)
                 ]);


                     $slider = new ProductImage;

                     $slider->product_id = $product->id;
                     $slider->image = "large-image-1.jpg";
                     $slider->save();

                     $slider = new ProductImage;

                     $slider->product_id = $product->id;
                     $slider->image = "large-image-2.jpg";
                     $slider->save();

            }
        }


    } // end function

}// end class
