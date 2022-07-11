<?php

$title = '日本の人口は何人でしょうか？？';

$questions = ['①1億人', '②1.2億人', '③１.7億人', '④2億人'];

$answer = $questions[1];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズ</title>
</head>

<body>
    <h1>③問題です！</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer3.php">
        <?php foreach ($questions as $question) { ?>
            <input name="selected_question" required type="radio" value="<?php echo $question; ?>" /><?php echo $question; ?>
            <br>
        <?php } ?>
        <input name="answer" type="hidden" value="<?php echo $answer; ?>" />
        <br>
        <input type="submit" value="わかるかな〜？">
    </form>
</body>

</html>