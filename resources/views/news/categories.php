<?php foreach ($categories as $cat) : ?>
    <div style='border: 1px solid red'>
        <h2><?= $cat['title'] ?></h2>
        <a href="<?= route('category.show', ['id' => $cat['id']]) ?>">More...</a>
    </div>
<?php endforeach; ?>