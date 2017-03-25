<?php

use Illuminate\Database\Seeder;
use App\category;
use Intervention\Image\Facades\Image;

class CategorySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $categories = [
            array("title"=>'Food and beverage',"image"=>array('1000'=>"1000_.png","600"=>"600_.png","300"=>"300_.png","150"=>"150_.png")),
            array("title"=>'Health & Beauty',"image"=>array('1000'=>"1000_.png","600"=>"600_.png","300"=>"300_.png","150"=>"150_.png")),
            array("title"=>'Hotels & Travels',"image"=>array('1000'=>"1000_.png","600"=>"600_.png","300"=>"300_.png","150"=>"150_.png")),
            array("title"=>'Spa & Salon',"image"=>array('1000'=>"1000_.png","600"=>"600_.png","300"=>"300_.png","150"=>"150_.png")),
            array("title"=>'Movie & Events',"image"=>array('1000'=>"1000_.png","600"=>"600_.png","300"=>"300_.png","150"=>"150_.png")),
            array("title"=>'Gym & Clinic',"image"=>array('1000'=>"1000_.png","600"=>"600_.png","300"=>"300_.png","150"=>"150_.png")),
        ];
        foreach ($categories as $category) {
            $x = new category();
            $x->name = $category['title'];
            $x->image = json_encode($category['image']);
            $x->save();
        }
    }

}
