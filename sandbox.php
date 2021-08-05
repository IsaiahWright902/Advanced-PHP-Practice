<?php

// ternary operators

$score = 50;
// if ($score > 40) {
//     echo 'high score!';
// } else {
//     echo 'low score :(';
// }

echo $score > 40 ?  'high score!' : 'low score :(';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1> <?php echo $score > 40 ?  'high score!' : 'low score :('; ?></h1>

</body>

</html>