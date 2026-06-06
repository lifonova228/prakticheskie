<div class="content ins">
    <h1>Альбомы</h1>
    <div class="albums-grid">
        <?php foreach ($albums as $album): ?>
            <div class="card">
                <img src="../<?php echo $album['path']; ?>" class="teams_img" alt="">
                <div class="card_text">
                    <h3><?php echo $album['name']; ?></h3>
                    <p>Страна: <b><?php echo $album['country']; ?></b></p>
                    <p>Год выпуска: <b><?php echo $album['date']; ?></b></p>
                    <span class="td_info">подробнее об альбоме...</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>