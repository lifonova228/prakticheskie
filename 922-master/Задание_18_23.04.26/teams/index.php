<?php 
    include dirname(__DIR__) . "/data/teams-data.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include dirname(__DIR__) . "/inc/head-other.php"; ?>
</head>
<body>
    <header>
        <div class="content ins">
            <?php include dirname(__DIR__) . "/inc/header-other.php"; ?>
        </div>
    </header>

    <div class="main ins">
        <?php 
            include dirname(__DIR__) . "/inc/content-teams.php";
        ?> 
    </div>

    <footer>
        <div class="content">
            <?php include dirname(__DIR__) . "/inc/footer.php"; ?>
        </div>
    </footer>
</body>
</html>