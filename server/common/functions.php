<?php
require_once __DIR__ . '/config.php';

// 接続処理を行う関数
function connect_db()
{
    try {
        return new PDO(
            DSN,
            USER,
            PASSWORD,
            [PDO::ATTR_ERRMODE =>
            PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

// エスケープ処理を行う関数  ※エスケープ処理=そいつを前に置くと特別な意味が無効になるよ！な文字のこと。
function h($str)
{
    // ENT_QUOTES: シングルクオートとダブルクオートを共に変換する。
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//variablecost 入力ページ
function signup_validate($food, $everydaygood, $hobby, $eatingout, $miscellaneouscost)
{
    $errors = [];

    if (empty($food)) {
        $errors[] = MSG_FOOD_REQUIRED;
    }

    if (empty($everydaygood)) {
        $errors[] = MSG_EVERYDAYGOOD_REQUIRED;
    }

    if (empty($hobby)) {
        $errors[] = MSG_HOBBY_REQUIRED;
    }

    if (empty($eatingout)) {
        $errors[] = MSG_EATINGOUT_REQUIRED;
    }

    if (empty($miscellaneouscost)) {
        $errors[] = MSG_MISCELLANEOUSCOST_REQUIRED;
    }

    return $errors;
}
function insert_data($paidday, $food, $daily, $hobby, $eating, $miscellaneous)
{
    $dbh = connect_db();

    $sql = <<<EOM
    INSERT INTO 
        variablecost
        (paidday, food, daily, hobby, eating, miscellaneous)
    VALUES 
        (:paidday, :food, :daily, :hobby, :eating, :miscellaneous);
    EOM;
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':paidday', $paidday, PDO::PARAM_STR);
    $stmt->bindValue(':food', $food, PDO::PARAM_INT);
    $stmt->bindValue(':daily', $daily, PDO::PARAM_INT);
    $stmt->bindValue(':hobby', $hobby, PDO::PARAM_INT);
    $stmt->bindValue(':eating', $eating, PDO::PARAM_INT);
    $stmt->bindValue(':miscellaneous', $miscellaneous, PDO::PARAM_INT);
    $stmt->execute();
}


//fixedcost入力ページ
function signup_validate2($rent, $utilitycost, $car, $insurance, $smartphone, $saving)
{
    $errors = [];

    if (empty($rent)) {
        $errors[] = MSG_RENT_REQUIRED;
    }

    if (empty($utilitycost)) {
        $errors[] = MSG_UTILITYCOST_REQUIRED;
    }

    if (empty($car)) {
        $errors[] = MSG_CAR_REQUIRED;
    }

    if (empty($insurance)) {
        $errors[] = MSG_INSURANCE_REQUIRED;
    }

    if (empty($smartphone)) {
        $errors[] = MSG_SMARTPHONE_REQUIRED;
    }

    if (empty($saving)) {
        $errors[] = MSG_SAVING_REQUIRED;
    }

    return $errors;
}
function insert_data2($paidday, $rent, $utilitycost, $car, $insurance, $smartphone, $saving)
{
    $dbh = connect_db();

    $sql = <<<EOM
    INSERT INTO 
        fixedcost
        (paidday, rent, utilitycosts, car, insurance, smartphone,saving)
    VALUES 
        (:paidday, :rent, :utilitycosts, :car, :insurance, :smartphone, :saving);
    EOM;
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':paidday', $paidday, PDO::PARAM_STR);
    $stmt->bindValue(':rent', $rent, PDO::PARAM_INT);
    $stmt->bindValue(':utilitycosts', $utilitycost, PDO::PARAM_INT);
    $stmt->bindValue(':car', $car, PDO::PARAM_INT);
    $stmt->bindValue(':insurance', $insurance, PDO::PARAM_INT);
    $stmt->bindValue(':smartphone', $smartphone, PDO::PARAM_INT);
    $stmt->bindValue(':saving', $saving, PDO::PARAM_INT);
    $stmt->execute();
}


//削除ページ
function deletedata($dataid)
{
    $dbh = connect_db();

    $sql = <<<EOM
    delete from variablecost where id = :id;
    EOM;
    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':id', $dataid, PDO::PARAM_INT);
    $stmt->execute();
}

function find_variablecost_by_paidday($paidday)
{
    $dbh = connect_db();

    $sql = <<<EOM
    SELECT 
        * 
    FROM 
        variablecost 
    WHERE
        paidday = :paidday
    EOM;
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':paidday', $paidday, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


// function find_variablecost_by_paidday($paidday, $food, $daily, $hobby, $eating, $miscellaneous)
// {
//     foreach ($variablecosts as $variablecost => $value) {
//         # code...
//     }
//     echo  '日付 ' . $paidday . "<br>", '食費 ¥' . $food . "<br>", '日用品費 ¥' . $everydaygoods . "<br>", '趣味 ¥' . $hobby . "<br>", '外食 ¥' . $eatingout . "<br>", '雑費 ¥' . $miscellaneouscosts . "<br>" 
// }
