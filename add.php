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
            <h2>Add a question</h2>
            <form method="POST" action="process.php">
                <p>
                    <label>Enter the question number.</label>
                    <input type="number" name="question_number"> 
                </p>
                <p>
                    <label>What question do you want to add?</label>
                    <input type="text" name="question_text"> 
                </p>
                    <div> 
                <h3>
                    Add all the potential answers.
                </h3>
                    </div>
                <p>
                    <label>What's the 1. choice of an answer?</label>
                    <input type="text" name="question_answer1"> 
                </p>
                <p>
                    <label>What's the 2. choice of an answer?</label>
                    <input type="text" name="question_answer2"> 
                </p>
                <p>
                    <label>What's the 3. choice of an answer?</label>
                    <input type="text" name="question_answer3"> 
                </p>
                <p>
                    <label>What's the 4. choice of an answer?</label>
                    <input type="text" name="question_answer4"> 
                </p>
                
                <input type="radio" name="question_answer4"> <br>
                
                <input type="submit" name="submit" value='submit'>
                
            </form>
        </main>
        <footer>
            <div class ="container">
                Copyright &copy; 2023, Damir Zrnic
            </div>
        </footer>
    </body>
</html>
