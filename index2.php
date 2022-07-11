<?php

$title = '現在の一番人口の多い国は？';

$questions = ['①アメリカ合衆国', '②インド', '③インドネシア', '④中華人民共和国'];

$answer = $questions[3];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズ</title>
</head>

<body>
    <h1>②問題です！</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer2.php">
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