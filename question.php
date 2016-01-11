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
        <div class="current">Question 1 of 5</div>
        <p class="question">
            What does PHP stand for
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <li><input name="choice" type="radio" value="1">PHP: HyperText Preprocessor</li>
                <li><input name="choice" type="radio" value="1">PHP: Private Home PHP</li>
                <li><input name="choice" type="radio" value="1">PHP: Pretty house people</li>
                <li><input name="choice" type="radio" value="1">PHP: Paapa Home PHP</li>

            </ul>

            <input type="submit" value="Submit" class="submit">
        </form>

    </div>
</main>
<footer>
    <div class="container">
        CopyRight &copy; 2014, PHP Quizzer
    </div>
</footer>


</body>
</html>
