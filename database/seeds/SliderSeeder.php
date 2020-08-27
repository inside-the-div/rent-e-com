<?php

use Illuminate\Database\Seeder;
use App\Slider;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider_list = ['slider-1.jpg','slider-2.jpg','slider-3.jpg'];

        for($i=0;$i<3;$i++){
        	$slider  = new Slider;
        	$slider->image = $slider_list[$i];
        	$slider->user_id = 1;
        	$slider->active = 1;
        	$slider->save();
        }
    }
}
