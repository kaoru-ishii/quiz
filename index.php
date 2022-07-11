<?php

$title = '現在の世界人口数は？';

$questions = ['①６６億人', '②７４億人', '③７８億人', '④８２億人'];

$answer = $questions[2];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズ</title>
</head>

<body>
    <h1>①問題です！</h1>
    <h2><?php echo $title; ?></h2>
    <!-- <input required type="radio" value="①６６億人">①６６億人
    <br>
    <input required type="radio" value="②７４億人">②７４億人
    <br>
    <input required type="radio" value="③７８億人">③７８億人
    <br>
    <input required type="radio" value="④８２億人">④８２億人
    <br> -->
    <form method="POST" action="answer.php">
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