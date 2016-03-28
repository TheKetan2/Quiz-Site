<?php include 'database.php'; ?>
<?php
session_start();

?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Quizzer</title>
            <link rel="stylesheet" type="text/css" href="css/style.css"/>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        </head>
        <body>
            <header>
                <div class="container">
                    <h1>QuizBook</h1>
                    <p>You can Play Quiz and Add Questions Too. Have Fun.</p>
                  
                </div>
            </header>
            <main>
                <div class="container">
                <h2>Quiz Finished!</h2>
                <p>Congratualations you have completed the test.</p>
                <p class="alert alert-success">Final Score: <?php echo $_SESSION['score']; ?></p>
                <a  class="btn btn-success" href="question.php?n=1" class="start">Try Again</a>
                </div>
            </main>
 
            <footer>
                <div class="container">
                    Copyright &copy; Free (K2)
                </div>
            </footer>           
        </body>
       
    </html>
    <?php
        session_destroy();
    ?>