<?php

// ternary operators:
// $score = 50;
// if ($score > 40) {
//     echo 'high score!';
// } else {
//     echo 'low score :(';
// }
// echo $score > 40 ?  'high score!' : 'low score :(';


// superglobals: 
// echo $_SERVER['SERVER_NAME'] . '<br />';
// echo $_SERVER['REQUEST_METHOD'] . '<br />';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
// echo $_SERVER['PHP_SELF'] . '<br />';
// echo $_SERVER['REQUEST_METHOD'] . '<br />';


// sessions:
if (isset($_POST['submit'])) {
    // cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);


    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>