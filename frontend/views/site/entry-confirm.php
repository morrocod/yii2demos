<?php
/**
 * Created by PhpStorm.
 * User: morro
 * Date: 22.07.2015
 * Time: 00:22
 */

use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><label>Name:</label> <?= Html::encode($model->name) ?></li>
    <li><label>Email:</label> <?= Html::encode($model->email) ?> f</li>
</ul>
