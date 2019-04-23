<?php

use yii\helpers\Url;


?>




<div class="container">
    <nav class="nav nav-menu">
        <a class="nav-link active" href="/">Всё меню</a>
        <?php foreach($data as $id) { ?>
        <a class="nav-link" href="<?=Url::to(['category/view', 'id' => $id['cat_name']]) ?>"><?php echo $id['browser_name']; ?></a>
        <? } ?>
    </nav>
</div>
