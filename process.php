<?php include 'database.php';?>

<?php session_start();?>

<?php 
if(!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}


if(isset($_POST)) {
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
    
    $query = "SELECT * FROM `questions`;";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    
    $total = mysqli_num_rows($result);
    
    $query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    
    $row = mysqli_fetch_assoc($result);
    
    $correct_choice = $row['id'];
    
    if($correct_choice == $selected_choice) {
        $_SESSION['score']++;
    }
    
    echo $total;
    
    if($number == $total) {
        header("Location: final.php");
        exit();
    } else {
        header("Location: question.php?n=" . $next);
    }
}

?>

