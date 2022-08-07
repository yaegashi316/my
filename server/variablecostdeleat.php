<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';

// 変数の初期化
$errors = [];
$variablecosts = [];

// $fixeddate = '';
// $result = '';
// $paidday = '';
// $rent = '';
// $utilitycosts = '';
// $car = '';
// $insurance = '';
// $smartphone = '';
// $saving = '';

$paidday = filter_input(INPUT_GET, 'paidday');
$variablecosts = find_variablecost_by_paidday($paidday);





//日付をとる→セレクトで調べる→表示をIDでとってをデリート
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $dataid = $_GET['id'];
        deletedata($dataid);
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/head.php' ?>


<body class="register__body">
    <?php include_once __DIR__ . '/header.php' ?>
    <p><a href="variablecost.php"><img src="img/戻る2.png" alt="戻る" class="back"></a></p>
    <h1 class="h1_1">変動支出削除</h1>
    <div class="fixedform">
        <form method="GET" action="" target="fixed">
            <div class="cost__date__wrapper">
                <p class="cost__date">
                    <label><input type="date" min="2022-07-01" name="paidday" value="<?= $paidday ?>"></label>
                <p class="cost__btn"><input type="submit" value="検索"></p>
                </p><br>
            </div>
        </form>

        <div class="error_message">
            <?php if (!empty($errors)) : ?>
                <ul class="errors">
                    <?php foreach ($errors as $error) : ?>
                        <li>
                            <?= h($error) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="cost__date__wrapper">
            <p class="cost__date">
            </p><br>
        </div>

    </div>


    <?php foreach ($variablecosts as $vc) : ?>
        <table border="1" align="center">
            <?= "<tr><th>id</th>" . "<th>食費</th>" . "<th>日用品費</th>" . "<th>趣味</th>" . "<th>外食</th>" . "<th>雑費</th>" . "<th></th></tr>" .
                "<tr><th>$vc[id]</th>" . "<td >$vc[food]</td>" . "<td>$vc[daily]</td>" . "<td>$vc[hobby]</td>" . "<td>$vc[eating]</td>" . "<td>$vc[miscellaneous]</td>" . "<td><form>" . "<input type=submit value=削除>" . "<input type=hidden name=id value=$vc[id]>" . "</form></td></tr>" ?>

        </table>
    <?php endforeach; ?>


    <br><br><br><br><br>
    <?php include_once __DIR__ . '/footer.php' ?>

</body>

</html>
