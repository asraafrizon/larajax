<?php

use Illuminate\Database\Seeder;
use App\Category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'IT',
        	'slug' => str_slug('IT')
        ]);

        Category::create([
        	'name' => 'keuangan',
        	'slug' => str_slug('keuangan')
        ]);

        Category::create([
        	'name' => 'manajemen',
        	'slug' => str_slug('manajemen')
        ]);
    }
}
