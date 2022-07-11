<?php

$selected_question = $_POST['selected_question'];
$answer = $_POST['answer'];

if ($selected_question == $answer) {
    $result = '正解！さすがです！';
} else {
    $result = '不正解！残念でしたー！';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>答え</title>
</head>
<body>
    <h1>答え</h1>
    <div>あなたの答えは・・・</div>
    <div><?php echo $result; ?></div>
    <br>
    <a href="index.php">もう一度行う</a>
    <br>
    <br>
    <a href="index2.php">次の問題へ</a>
</body>
</html>