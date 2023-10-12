<?php

namespace App\Models;

class Category
{
    private array $categories = [
        1 => [
            'id' => 1,
            'title' => 'Politics'
        ],
        2 => [
            'id' => 2,
            'title' => 'Sport'
        ],
        3 => [
            'id' => 3,
            'title' => 'Ecomonics'
        ],
        4 => [
            'id' => 4,
            'title' => 'Weather'
        ],
    ];

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryById(int $id): ?array
    {
        if (array_key_exists($id, $this->getCategories())) {
            return $this->categories[$id];
        } else {
            return null;
        }
    }
}
