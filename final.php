<?php
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<header>
    <div class="container">
        <h1>PHP Quizzer</h1>
    </div>

</header>

<main>
    <div class="container">
        <h2>You are done</h2>
        <p>Congrats!! you have completed the test</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?></p>
        <a href="question.php?n=1" class="start">Take Again</a>

    </div>
</main>
<footer>
    <div class="container">
        CopyRight &copy; 2014, PHP Quizzer
    </div>
</footer>

<?php session_destroy(); ?>
</body>
</html>
