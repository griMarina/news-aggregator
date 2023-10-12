<?php foreach ($news as $n) : ?>
    <div style='border: 1px solid green'>
        <h2><?= $n['title'] ?></h2>
        <h2><?= $n['text'] ?></h2>
        <a href="<?= route('news.show', ['id' => $n['id']]) ?>">More</a>
    </div>
<?php endforeach; ?>