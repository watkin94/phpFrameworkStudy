<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!--视图使用了一个功能强大的小部件 ActiveForm 去生成 HTML 表单。 其中的 begin() 和 end() 分别用来渲染表单的开始和关闭标签-->
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'email') ?>

    <div class="form-group">
<!-- 使用 yii\helpers\Html::submitButton() 方法生成提交按钮-->
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
