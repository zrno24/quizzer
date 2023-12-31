<?php include "database.php";?>
<?php session_start();?>
<?php 

$number = (int) $_GET['n'];



$query = "SELECT * FROM `questions` WHERE question_number = $number";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

$question = mysqli_fetch_assoc($result);

$query2 = "SELECT * FROM `choices` WHERE question_number = $number";

$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));

$query3 = "SELECT * FROM `questions`;";
    
$result3 = mysqli_query($conn, $query3) or die(mysqli_error());
    
$total = mysqli_num_rows($result3);

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
                <div class="current">Question <?php echo $question['question_number'];?> of <?php echo $total?></div>
                <p class="question">
                    <?php echo $question['text'];?>
                </p>
                <form method="POST" action="process.php">
                    <ul class="choices">
                        <?php while($row = mysqli_fetch_assoc($result2)): ?>
                        <li><input name="choice" type="radio" value="<?php echo$row['is_correct'];?>"><?php echo $row['text'];?></li>
                        <?php endwhile; ?>
                    </ul>   
                    <input type="submit" value="Submit"> 
                    <input type="hidden" name="number" value="<?php echo $number;?>">
                </form>
            </div> 
        </main>
        <footer>
            <div class ="container">
                Copyright &copy; 2023, Damir Zrnic
            </div>
        </footer>
    </body>
</html>