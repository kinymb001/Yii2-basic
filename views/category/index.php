<?php
/** @var yii\web\View $this */
?>
<!-- views/category/index.php -->
<h1>Category List</h1>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category->id ?></td>
            <td><?= $category->name ?></td>
            <td><?= $category->description ?></td>
            <td>
                <?= yii\helpers\Html::a('View', ['view', 'id' => $category->id], ['class' => 'btn btn-primary']) ?>
                <?= yii\helpers\Html::a('Update', ['update', 'id' => $category->id], ['class' => 'btn btn-success']) ?>
                <?= yii\helpers\Html::a('Delete', ['delete', 'id' => $category->id], ['class' => 'btn btn-danger', 'data' => ['confirm' => 'Are you sure you want to delete this item?', 'method' => 'post']]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
