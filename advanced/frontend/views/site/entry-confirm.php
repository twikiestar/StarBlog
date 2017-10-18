<?php
use yii\helpers\Html;
?>
<p>你输入了以下内容</p>
<ul>
	<li><label>名字</label>:<?= Html::encode($mod->name) ?></li>
	<li><label>邮箱地址</label>:<?= Html::encode($mod->email) ?></li>
</ul>