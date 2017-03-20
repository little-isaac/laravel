<?php

use Illuminate\Database\Seeder;
use App\category;
class CategorySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $categories = [
            'Food and beverage',
            'Health & Beauty',
            'Hotels & Travels',
            'Spa & Salon',
            'Movie & Events',
            'Gym & Clinic'
        ];
        foreach ($categories as $category) {
            $x = new category();
            $x->name = $category;
            $x->save();
        }
    }

}
