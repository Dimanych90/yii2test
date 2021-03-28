<?php

use yii\helpers\Html;

use yii\web\YiiAsset;

use yii\helpers\Url;

?>

<form method="post" action="<? echo Url::to('added') ?>">
    <input name="title" value="" placeholder="Title"><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input type="submit" value="Save">
</form>

