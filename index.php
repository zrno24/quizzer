<?php include "database.php"; ?>
<?php 
$query = "SELECT COUNT(question_number) AS number_of_questions FROM `questions`";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
$row = mysqli_fetch_assoc($result);
$questionNo = $row['number_of_questions'];


?>

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
                <h2> Test your PHP knowledge </h2>
                <p> This will be a multiple choice quiz </p> 
                <ul>
                    <li><strong> Number of questions: </strong><?php echo $questionNo;?></li>
                    <li><strong> Estimated time needed: </strong><?php echo $questionNo * .5;?> minutes</li>
                    <li><a href="question.php?n=1" class="start"> Start the Quiz </a></li>
                </ul>
            </div>
        </main>
        <footer>
            <div class ="container">
                Copyright &copy; 2023, Damir Zrnic
            </div>
        </footer>
    </body>
</html>
