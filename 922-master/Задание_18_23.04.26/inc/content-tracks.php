<div class="content ins">
    <h1 style="text-align: center; margin-bottom: 30px;">Треки</h1>
    <table style="width: 100%; border-collapse: collapse; text-align: center;">
        <thead>
            <tr style="border-bottom: 1px solid #ccc; font-weight: bold;">
                <td style="padding: 15px; width: 20%;">ID трека</td>
                <td style="padding: 15px; width: 60%;">Название песни</td>
                <td style="padding: 15px; width: 20%;">Примечание</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tracks as $track): ?>
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 20px 0; font-size: 1.1em;"><?php echo $track['id_track']; ?></td>
                    <td style="padding: 20px 0;">
                        <div style="font-weight: bold; font-size: 1.2em;"><?php echo $track['name']; ?></div>
                        <a href="#" style="font-size: 0.8em; color: #888; text-decoration: underline;">подробнее...</a>
                    </td>
                    <td style="padding: 20px 0;"><?php echo $track['note']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>