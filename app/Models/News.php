<?php

declare(strict_types=1);

namespace App\Models;

class News
{
    private Category $category;

    private array $news = [
        1 => [
            'id' => 1,
            'title' => 'News 1',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 1
        ],
        2 => [
            'id' => 2,
            'title' => 'News 2',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 1
        ],
        3 => [
            'id' => 3,
            'title' => 'News 3',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 1
        ],
        4 => [
            'id' => 4,
            'title' => 'News 4',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 2
        ],
        5 => [
            'id' => 5,
            'title' => 'News 5',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 2
        ],
        6 => [
            'id' => 6,
            'title' => 'News 6',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 2
        ],
        7 => [
            'id' => 7,
            'title' => 'News 7',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 3
        ],
        8 => [
            'id' => 8,
            'title' => 'News 8',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 3
        ],
        9 => [
            'id' => 9,
            'title' => 'News 9',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 3
        ],
        10 => [
            'id' => 10,
            'title' => 'News 10',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 4
        ],
        11 => [
            'id' => 11,
            'title' => 'News 11',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 4
        ],
        12 => [
            'id' => 12,
            'title' => 'News 12',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nihil doloremque fugiat, ex necessitatibus voluptatum sapiente, aliquid dolor provident, obcaecati cum ipsum autem? Et accusamus recusandae exercitationem voluptas, ea tenetur?',
            'category_id' => 4
        ]
    ];

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getNews(): array
    {
        return $this->news;
    }

    public function getNewsById($id): ?array
    {
        if (array_key_exists($id, $this->getNews())) {
            return $this->getNews()[$id];
        }
        return null;
    }

    public function getNewsByCategoryId($id): array
    {
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }
}
