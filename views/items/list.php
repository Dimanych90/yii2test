<?php

/* @var $this yii\web\View */

/** @var $items \app\models\Items */

use yii\helpers\Html;

use yii\web\YiiAsset;

use yii\helpers\Url;

$this->title = 'Wonderful items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table-bordered">
        <a href="<? echo Yii::$app->urlManager->createUrl(['items/add']) ?>">Add item</a>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Description</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

        <?foreach ($items as $item) :?>

        <tr>
        <td><?echo $item->id?></td>
            <td><?echo $item->title?></td>
            <td><?echo $item->description?></td>
            <td><a href="<?php echo Url::to(['items/edit','id'=>$item->id]) ?>">edit</a></td>
            <td><a href="<?php echo Url::to(['items/delete','id'=>$item->id]) ?>">delete</a></td>
            <? endforeach; ?>
        </tr>

    </table>

    <code></code>
</div>

