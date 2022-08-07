<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/../common/functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="../css/stylesheet.css">
<?php include_once __DIR__ . '/../head.php' ?>


<body class="year__body">
<?php include_once __DIR__ . '/../header.php' ?>
<p><a href="../month.php"><img src="../img/戻る.png" alt="戻る" class="back"></a></p>
    <h1 class="h1_2">年</h1>
    <div class="weekmain">
        <table border="1" cellpadding="40px" align="center">
            <tr>
                <th></th>
                <th>収入</th>
                <th>支出</th>
                <th>残高</th>
            </tr>
            <tr>
                <th>1月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>2月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>3月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>4月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>5月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>6月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>7月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>8月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>9月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>10月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>11月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
            <tr>
                <th>12月</th>
                <td>¥</td>
                <td>¥</td>
                <td>¥</td>
            </tr>
        </table>
    </div>
    <div class="weeksub">
    <ul align="justify">
        <li><a href="year.php"><img src="../img/前年.png" alt="前年"></a></li>
        <li><a href="year3.php"><img src="../img/翌年.png" alt="翌年"></a></li>
    </ul>
    <br><br><br><br>
    <?php include_once __DIR__ . '/../footer.php'?></body>
</body>
</html>
