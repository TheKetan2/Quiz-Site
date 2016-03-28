<?php include 'database.php' ?>
<?php
//get total num of que
        $query = "SELECT *FROM question";
        
//get result
        $results= $mysqli->query($query);
        $total=$results->num_rows;
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
            <header class=>
                <div class="container">
                    <h1>QuizBook</h1>
                    <p>You can Play Quiz and Add Questions Too. Have Fun.</p>
                    <a class= "btn btn-danger" href="index.php" class="links">Home</a>
                    <a class="btn btn-danger" href="add.php" class="links">Add Questions</a>
                                     
                </div>
            </header>
            <main>
                <div class="container">
                    <h2>Test your PHP Knowlwdge</h2>
                    <p>This is a multiple choice quiz to test your knowledge of PHP</p>
                    <ul>
                        <li><strong>Total Number of Questions: </strong><?php echo $total; ?></li>
                        <br>
                        <li><strong>Type:</strong> MCQ</li>
                        <br>
                        <!--li><strong>Estimated Time:</strong><//?php echo $total*0.5; ?> Minutes</li-->
                    </ul>
                    <a class="btn btn-success" href="question.php?n=1" class="start">Start Quiz</a>
                </div>
            </main>
 
            <footer>
                <div class="container">
                    Copyright &copy; Free (K2)
                </div>
            </footer>           
        </body>
    </html>