<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;


?>

<h1 class="my-3 d-flex justify-content-center"  style="font-family: 'Arial Black'">Войдите в свою учетную запись</h1>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ]) ?>

    <div class="form-group">
        <div class="offset-lg-1 col-lg-11">
            <?= Html::submitButton('Войти', ['class' => 'nav-item my-3', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
    <style>
        .btn {
            text-decoration: none;
            display: inline-block;
            border-radius: 20px;
            border:none;
            margin: 10px 20px;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 3px;
            color: #d04a18;
            background: white;
            box-shadow: 0 8px 15px rgb(93, 37, 0);
            transition: .3s;
        }

        .btn:hover {
            color: #d04a18;
            background: white;
            box-shadow: 0 8px 15px rgb(93, 37, 0);
            transform: translateY(-10px);
        }
    </style>
</div>
