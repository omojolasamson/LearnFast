<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Category::create([
            'name' => 'Development',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Business',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Finance and Accounting',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'IT and Software',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Office Productivity',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Personal Development',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Design',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Marketing',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Lifestyle',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Photography',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Health and Fitness',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Music',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);

        App\Models\Category::create([
            'name' => 'Teaching and Academics',
            'description' => 'Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text Lorem Ipsum Text',
            'view_count' => 1
        ]);


    }
}
