
<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/head.php' ?>

<body class="register__body">
    <?php include_once __DIR__ . '/header.php' ?>
    <p><a href="fixedcost.php"><img src="img/戻る2.png" alt="戻る" class="back"></a></p>
    <h1 class="h1_1">固定支出削除</h1>
    <div class="fixedform">
        <form method="POST" action="fixedcost.php" target="fixed">
            <div class="cost__date__wrapper">
                <p class="cost__date">
                    <label><input type="date" min="2022-07-01" name="fixeddate"></label>
                    <p class="cost__btn"><input type="submit" value="検索"></p>
                </p><br>
            </div>
            <div class="error_message">
            </div>
            <div class="cost__date__wrapper">
                <p class="cost__date">
                    <label><input type="number" name="dataid"></label>
                </p><br>
            </div>
            <p class="cost__btn"><a href="delete.php"><input type="submit" value="削除" ></a></p>
        </form>
    </div>

    <br><br><br><br><br>
    <?php include_once __DIR__ . '/footer.php' ?>
</body>

</html>




