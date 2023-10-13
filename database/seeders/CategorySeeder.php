<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryTitles = [
            'FrontEnd',
            'BackEnd',
            'FullStack',
            'Ui/Ux',
            'Mobile',
            'Other',
        ];
        foreach ($categoryTitles as $catTitle) {
            Category::create([
                "title" => $catTitle,
            ]);
        }
    }
}
