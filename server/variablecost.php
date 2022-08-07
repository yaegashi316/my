<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';


// 変数の初期化
$paidday = '';
$foods = '';
$everydaygoods = '';
$hobby = '';
$eatingout = '';
$miscellaneouscosts = '';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /*filter_input使い方→     filter_input ( 型 , 変数名, フィルタ, オプション);*/
    $foods = filter_input(INPUT_POST, 'foods', FILTER_VALIDATE_INT);
    $everydaygoods = filter_input(INPUT_POST, 'everydaygoods', FILTER_VALIDATE_INT);
    $hobby = filter_input(INPUT_POST, 'hobby', FILTER_VALIDATE_INT);
    $eatingout = filter_input(INPUT_POST, 'eatingout', FILTER_VALIDATE_INT);
    $miscellaneouscosts = filter_input(INPUT_POST, 'miscellaneouscosts', FILTER_VALIDATE_INT);

    $errors = signup_validate($foods, $everydaygoods, $hobby, $eatingout, $miscellaneouscosts);

    $paidday = $_POST['fixeddate'];
    $food = $_POST['foods'];
    $daily = $_POST['everydaygoods'];
    $hobby = $_POST['hobby'];
    $eating = $_POST['eatingout'];
    $miscellaneous = $_POST['miscellaneouscosts'];
    insert_data($paidday, $food, $daily, $hobby, $eating, $miscellaneous);
}

?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/head.php' ?>

<body class="register__body">
    <?php include_once __DIR__ . '/header.php' ?>
    <p><a href="index.php"><img src="img/戻る2.png" alt="戻る" class="back"></a></p>
    <h1 class="h1_1">変動支出</h1>
    <div class="fixedform">
        <form method="POST" action="variablecost.php" target="fixed">
            <div class="cost__date__wrapper">
                <p class="cost__date">
                    <label><input type="date" min="2022-07-01" name="fixeddate"></label>
                </p><br>
            </div>

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

            <ul class="cost__items">
                <li class="cost__item">
                    <p class="cost_input">
                        <label>食費<br><input type="number" name="foods" placeholder="(例)1000" value="<?= h($foods) ?>"></label>
                    </p>
                </li>
                <li class="cost__item">
                    <p class="cost_input">
                        <label>日用品費<br><input type="number" name="everydaygoods" placeholder="(例)1000" value="<?= h($everydaygoods) ?>"></label>
                    </p>
                </li>
                <li class="cost__item">
                    <p class="cost_input">
                        <label>趣味<br><input type="number" name="hobby" placeholder="(例)1000" value="<?= h($hobby) ?>"></label>
                    </p>
                </li>
            </ul>
            <ul class="cost__items__second">
                <li class="cost__item cost__item__second">
                    <p class="cost_input">
                        <label>外食<br><input type="number" name="eatingout" placeholder="(例)1000" value="<?= h($eatingout) ?>"></label>
                    </p>
                </li>
                <li class="cost__item cost__item__second">
                    <p class="cost_input">
                        <label>雑費<br><input type="number" name="miscellaneouscosts" placeholder="(例)1000" value="<?= h($miscellaneouscosts) ?>"></label>
                    </p>
                </li>
            </ul>


            <p class="cost__btn"><input type="submit" value="登録"></p>
            <p><a href="variablecostdeleat.php"><img src="img/削除ボタン.png" alt="削除" class="deleat"></a></p>



        </form>
    </div>
    <div class="display">
        <?= '日付 ' . $paidday . "<br>", '食費 ¥' . $foods . "<br>", '日用品費 ¥' . $everydaygoods . "<br>", '趣味 ¥' . $hobby . "<br>", '外食 ¥' . $eatingout . "<br>", '雑費 ¥' . $miscellaneouscosts . "<br>" ?>
    </div><br><br><br><br>
    <?php include_once __DIR__ . '/footer.php' ?>
</body>

</html>
