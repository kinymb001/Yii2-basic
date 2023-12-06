<!-- views/category/view.php -->
<h1>Category: <?= $category->name ?></h1>

<table class="table">
    <tr>
        <th>ID</th>
        <td><?= $category->id ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?= $category->name ?></td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?= $category->description ?></td>
    </tr>
</table>
