<?php

use yii\grid\GridView;
use yii\helpers\Html;

?>
<!--use yii\helpers\Html;-->
<!--use yii\grid\GridView;-->
<!---->
<!--// ...-->

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        [
            'attribute' => 'category.name', // Truy cập vào thuộc tính name của mối quan hệ category
            'label' => 'Category',
        ],
        'title',
        'content:ntext',
        'created_at:datetime',
        'updated_at:datetime',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'view' => function ($url, $posts, $key) {
                    return Html::a('View', ['view', 'id' => $posts->id], ['class' => 'btn btn-primary']);
                },
                'update' => function ($url, $posts, $key) {
                    return Html::a('Update', ['update', 'id' => $posts->id], ['class' => 'btn btn-success']);
                },
                'delete' => function ($url, $posts, $key) {
                    return Html::a('Delete', ['delete', 'id' => $posts->id], [
                        'class' => 'btn btn-danger',
                        'data' => ['confirm' => 'Are you sure you want to delete this item?', 'method' => 'post'],
                    ]);
                },
            ],
        ],
    ],
]); ?>
