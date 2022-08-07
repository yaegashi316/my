<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/head.php' ?>

    
<body class="month">
<?php include_once __DIR__ . '/header.php' ?>
    <p><a href="index.php"><img src="img/戻る.png" alt="戻る" class="back"></a></p>
    <h1 class="h1_2">当月累計</h1>
    <div class="mon">
        <ul >
        <table border="1" width="200px" height="70px" align="center">
        <tr>
            <th>収入</th>
            <td>¥300,000</td>
        </tr>
        <tr>
            <th>支出</th>
            <td>¥200,000</td>
        </tr>
        <tr>
            <th>残高</th>
            <td>¥100,000</td>
        </tr>
        </table>
            
    </div>
    <div class="sub">
        <ul>
            <li><a href="week/week.php"><img src="img/週間一覧.png" alt="週間一覧" class="week"></a></li>
            <li><a href="year/year.php"><img src="img/年間一覧.png" alt="年間一覧" class="year"></a></li>
        </ul>
</div><br><br><br><br>
    <!-- <?php include_once __DIR__ . '/footer.php'?></body> -->

</html>
