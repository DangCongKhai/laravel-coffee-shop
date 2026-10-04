<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /** @var list<array{id: int, name: string, description: string}> */
    public array $categories = [
        [
            'id' => 1,
            'name' => 'Cafe',
            'description' => '',
        ],
        [
            'id' => 2,
            'name' => 'Chicken',
            'description' => '',
        ],
    ];

    /**
     * @return list<array{id: int, name: string, description: string}>
     */
    private function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getCategories() as $category) {
            Category::create($category);
        }
    }
}
