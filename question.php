<?php include 'database.php';?>
<?php
    //set question number
    $number=(int)$_GET['n'];
    //get question
    $query="SELECT * FROM `question` WHERE question_number=$number";
    
    //get result
    $result = $mysqli->query($query);
    $question = $result->fetch_assoc();
    
    $quer="SELECT * FROM `choices` where question_number=$number";
    
    //get result
    $choices = $mysqli->query($quer);
     $query = "SELECT *FROM `question`";
        
        //get result
    $results = $mysqli->query($query);
    $total= $results->num_rows;
    
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>QuizBook</title>
            <link rel="stylesheet" type="text/css" href="css/style.css"/>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        </head>
        <body>
            <header>
                   <div class="container">
                    <h1>QuizBook</h1
                    <p>You can Play Quiz and Add Questions Too. Have Fun.</p>
                  <a class="btn btn-danger" href="index.php" class="links">Home</a>
                  <a class="btn btn-danger" href="add.php" class="links">Add Questions</a>
                </div>
            </header>
            <main>
                <div class="container">
                    <br>
                    <div class="alert alert-success">Question <?php echo $question['question_number'];?> of <?php echo $total;?></div>
                    <p class="question">
                       <?php echo $question['text'];?>
                    </p>
                    <form method="post" action="process.php">
                        <ul class="choices">
                            <?php while($choices_result=$choices->fetch_assoc()):?>
                                <li><input name="choice" type="radio" value="<?php echo $choices_result['id']; ?>"/>
                                    <?php echo $choices_result['text']; ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <input class="btn btn-success" type="submit" value="Submit"/>
                        <input type="hidden" name="number" value="<?php echo $number; ?>"/>
                    </form>
                </div>
            </main>
 
            <footer>
                <div class="container">
                    Copyright &copy; Free (K2)
                </div>
            </footer>           
        </body>
    </html>