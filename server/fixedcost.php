<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';


$rent = '';
$utilitybill = '';
$car = '';
$insurancefee = '';
$mobile = '';
$saving = '';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /*filter_input使い方→     filter_input ( 型 , 変数名, フィルタ, オプション);*/
    $utilitybill = filter_input(INPUT_POST, 'utilitybill', FILTER_VALIDATE_INT);
    $car = filter_input(INPUT_POST, 'car', FILTER_VALIDATE_INT);
    $insurancefee = filter_input(INPUT_POST, 'insurancefee', FILTER_VALIDATE_INT);
    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_VALIDATE_INT);
    $saving = filter_input(INPUT_POST, 'saving', FILTER_VALIDATE_INT);

    $errors = signup_validate($rent, $utilitybill, $car, $insurancefee, $mobile, $saving);

    $paidday = $_POST['fixeddate'];
    $rent = $_POST['rent'];
    $utilitybill = $_POST['utilitybill'];
    $car = $_POST['car'];
    $insurancefee = $_POST['insurancefee'];
    $mobile = $_POST['mobile'];
    $saving = $_POST['saving'];
    insert_data2($paidday, $rent, $utilitybill, $car, $insurancefee, $mobile, $saving);
}
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/head.php' ?>

<body class="register__body">
    <?php include_once __DIR__ . '/header.php' ?>
    <p><a href="index.php"><img src="img/戻る2.png" alt="戻る" class="back"></a></p>
    <h1 class="h1_1">固定支出</h1>
    <div class="fixedform">
        <form method="POST" action="fixedcost.php" target="fixed">
            <div class="cost__date__wrapper">
                <p class="cost__date">
                    <label><input type="date" min="2022-07-01" name="fixeddate"></label>
                </p><br>
            </div>
            <ul class="cost__items">
                <li class="cost__item">
                    <p class="cost_input">
                        <label>家賃<br><input type="number" name="rent" placeholder="(例)1000"></label>
                    </p>
                </li>
                <li class="cost__item">
                    <p class="cost_input">
                        <label>水道光熱費<br><input type="number" name="utilitybill" placeholder="(例)1000"></label>
                    </p>
                </li>
                <li class="cost__item">
                    <p class="cost_input">
                        <label>車代<br><input type="number" name="car" placeholder="(例)1000"></label>
                    </p>
                </li>
                <li class="cost__item">
                    <p class="cost_input">
                        <label>保険料<br><input type="number" name="insurancefee" placeholder="(例)1000"></label>
                    </p>
                </li>
                <li class="cost__item">
                    <p class="cost_input">
                        <label>スマホ代<br><input type="number" name="mobile" placeholder="(例)1000"></label>
                    </p>
                </li>
                <li class="cost__item">
                    <p class="cost_input">
                        <label>貯金<br><input type="number" name="saving" placeholder="(例)1000"></label>
                    </p>
                </li>
            </ul>
            <p class="cost__btn"><input type="submit" value="登録"></p>
            <p><a href="fixtcostdeleat.php"><img src="img/削除ボタン.png" alt="削除" class="deleat"></a></p>
        </form>
    </div>
    <div class="display">
        <?= '日付 ' . $paidday . "<br>", '家賃 ¥' . $rent . "<br>", '水道光熱費 ¥' . $utilitybill . "<br>", '車 ¥' . $car . "<br>", '保険料 ¥' . $insurancefee . "<br>", 'スマホ代 ¥' . $mobile . "<br>", '貯金 ¥' . $saving . "<br>" ?>
    </div><br><br><br><br>
    <?php include_once __DIR__ . '/footer.php' ?>
</body>

</html>
