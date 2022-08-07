<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';

?>


<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/head.php' ?>

<body class="home">
    <?php include_once __DIR__ . '/header.php' ?>


    <h1 class="main__i">簡単家計簿</h1>
    <div class="contents__wrapper">
        <div class="check content">
            <p class="check__text">確認</p>
            <div class="cost__link">
                <a href="month.php"><img src="img/入支出.png" alt="入支出" class="home__button"></a>
                <a href="saving.php"><img src="img/貯金.png" alt="貯金" class="home__button"></a>
            </div>
        </div>
        <div class="register content">
            <p class="check__text">登録</p>
            <div class="cost__link">
                <a href="fixedcost.php"><img src="img/固定支出.png" alt="固定支出" class="home__button"></a>
                <a href="variablecost.php"><img src="img/変動支出.png" alt="変動支出" class="home__button"></a>
            </div>
        </div>

    </div>


    <div class="balance">
        <p class="barace_text"></p><br>
    </div><br><br><br><br><br>
    <?php include_once __DIR__ . '/footer.php' ?>
</body>

</html> 
