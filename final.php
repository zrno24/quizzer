<?php session_start(); ?>

<!DOCTYPE html>
<html lang="us">
    <head>
        <meta charset="UTF-8">
        <title>PHP Quiz</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <div class ="container">
                <h1> PHP Quizzer </h1>
            </div>
        </header>
        <main>
            <div class="container">
                <p>Congratulations!</p>
                <p>Final score: <?php echo $_SESSION['score'];?></p>
                <a href="question.php?n=1" class="start">Do the quiz again?</a>            
            </div>
        </main>
        <footer>
            <div class ="container">
                Copyright &copy; 2023, Damir Zrnic
            </div>
        </footer>
    </body>
</html>

<?php session_destroy();?>