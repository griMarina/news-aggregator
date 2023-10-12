<?php

namespace App\Models;

class Categories
{

    private array $categories = [
        1 => [
            'id' => 1,
            'title' => 'Politics',
            'slug' => 'politics'
        ],
        2 => [
            'id' => 2,
            'title' => 'Sport',
            'slug' => 'sport'
        ],
        3 => [
            'id' => 3,
            'title' => 'Ecomonics',
            'slug' => 'ecomonics',
        ],
        4 => [
            'id' => 4,
            'title' => 'Weather',
            'slug' => 'weather'
        ],
    ];

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryIdBySlug(string $slug): ?int
    {
        $id = null;

        foreach ($this->getCategories() as $category) {
            if ($category['slug'] == $slug) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public function getCategoryById(?int $id): ?array
    {
        if (array_key_exists($id, $this->getCategories())) {
            return $this->categories[$id];
        } else {
            return null;
        }
    }

    public function getCategoryTitleBySlug(string $slug): ?string
    {
        $id = $this->getCategoryIdBySlug($slug);
        $category = $this->getCategoryById($id);
        return $category['title'] ?? null;
    }
}
