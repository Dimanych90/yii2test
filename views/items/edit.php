<?php

use yii\helpers\Html;

use yii\web\YiiAsset;

use yii\helpers\Url;

?>

<form method="post" action= <?php echo Url::to('save') ?>>
    <input hidden name="id" value="<? echo Html::encode($item->id)?>"><br>
    <input name="title" value="<? echo Html::encode($item->title)?>"><br>
    <textarea type="text" name="description"><? echo Html::encode($item->description)?></textarea><br>
    <input type="submit" value="Save">
</form>

