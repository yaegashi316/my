<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/../common/functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="../css/stylesheet.css">
<?php include_once __DIR__ . '/../head.php' ?>

<body class="week__body">
<?php include_once __DIR__ . '/../header.php' ?>
    <p><a href="../month.php"><img src="../img/戻る.png" alt="戻る" class="back"></a></p>
    <h1 class="h1_2">1週目</h1>
    <div class="weekmain">
        <table border="1" cellpadding="10px" align="center">
            <tr>
                <th  >日付</th>
                <th>支出金額</th>
            </tr>
            <tr>
                <td>7月1日</td>
                <td>¥5000</td>
            </tr>
            <tr>
                <td>7月2日</td>
                <td>¥4000</td>
            </tr>
            <tr>
                <td>7月3日</td>
                <td>¥70000</td>
            </tr>
            <tr>
                <td>7月4日</td>
                <td>¥40000</td>
            </tr>
            <tr>
                <td>7月5日</td>
                <td>¥400</td>
            </tr>
            <tr>
                <td>7月6日</td>
                <td>¥5000</td>
            </tr>
            <tr>
                <td>7月7日</td>
                <td>¥2000</td>
            </tr>
        </table>

    </div>
    <p class="next"><a href="week2.php"><img src="../img/次週.png" alt="次週"></a></p>
    <br><br><br><br>
    <?php include_once __DIR__ . '/../footer.php'?>
</body>


</html>
