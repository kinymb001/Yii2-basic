<!-- views/category/_form.php -->
<?php $form = yii\widgets\ActiveForm::begin(); ?>

<?= $form->field($category, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($category, 'description')->textarea(['rows' => 6]) ?>

<div class="form-group">
    <?= yii\helpers\Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php yii\widgets\ActiveForm::end(); ?>
