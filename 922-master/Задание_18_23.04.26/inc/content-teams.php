<div class="content ins">
    <h1>Группы</h1>
    <?php foreach ($teams as $item): ?>
        <div class="card">
            <img src="../<?php echo $item['path']; ?>" class="teams_img" alt="">
            <div class="card_text">
                <h3><?php echo $item['name']; ?></h3>
                <p>Страна: <b><?php echo $item['country']; ?></b></p>
                <p>Год основания: <b><?php echo $item['date']; ?></b></p>
                <p>Стиль группы: <b><?php echo $item['style']; ?></b></p>
                <span class="td_info">подробнее...</span>
            </div>
        </div>
    <?php endforeach; ?>
</div>