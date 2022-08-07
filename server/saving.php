<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/head.php' ?>


<body class="month">
    <?php include_once __DIR__ . '/header.php' ?>

    <div class="saving">
        <p><a href="index.php"><img src="img/戻る.png" alt="戻る" class="back"></a></p>
        <h1 class="h1_2">貯金</h1>
        <div>
            <div class="cumulatixe">
                <p>目標:</p>
                <input type="text" class="target">
            </div>

            <p class="saving_botom"><img src="img/太線.png" alt="太線" width="1000px" height="20px"></p>
            <div>
                <p class="saving_balance">目標まであと…</p>
                <p class="saving_php">¥400,000</p>
            </div>
        </div>
        <div class="animal">
            <img src="img/生き物.png" alt="生き物" class="blue">
        </div><br><br><br><br>
        <!-- <?php include_once __DIR__ . '/footer.php' ?></body>  -->
</body>

</html>
