<?php

use App\Category;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Internet',
        ]);

        Category::create([
            'title' => 'Impresora',
        ]);
    }
}
