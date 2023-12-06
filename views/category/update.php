<!-- views/category/update.php -->
<h1>Update Category: <?= $category->name ?></h1>

<?= $this->render('_form', ['category' => $category]) ?>
