<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $post->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<?= DetailView::widget([
    'model' => $post,
    'attributes' => [
        'id',
        'category_id',
        'title',
        'content:ntext',
        'created_at:datetime',
        'updated_at:datetime',
    ],
]) ?>
