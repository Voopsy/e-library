<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<br>
<h1 class="d-flex justify-content-center" style="font-family: 'Arial Black'">Мои заказы</h1>
<br>
<div class="my-2">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название товара</th>
            <th scope="col">Количество</th>
            <th scope="col">Статус</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($order as $item): ?>
            <tr>
                <th scope="row"><?= $item['id'] ?></th>
                <td><?= $item['product']['name'] ?></td>
                <td><?= $item['counts'] ?></td>
                <?php if ($item['status'] == 0): ?>
                    <td>
                        Отменён
                    </td>
                <?php elseif ($item['status'] == 1): ?>
                    <td>
                        Новый
                    </td>
                <?php elseif ($item['status'] == 2): ?>
                    <td>
                        Подтверждён
                    </td>
                <?php endif; ?>
                <td>
                    <?php if ($item['status'] == 0 or $item['status'] == 2): ?>
                        Вы не можеет удалить заказ!
                    <?php else: ?>
                        <a href="<?= Url::toRoute(['order/remove', 'id' => $item['id']]) ?>"
                           class="btn btn-danger">Удалить</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>