<?php include 'database.php' ;?>

<?php session_start();?>
<?php
//check if score is set
    if(!isset($_SESSION['score'])){
        $_SESSION['score']=0;
    }
    
    if($_POST){
        $number=$_POST['number'];
        $selected_choice=$_POST['choice'];
        $next = $number+1;
        
        //get total score
        $query = "SELECT *FROM `question`";
        
        //get result
        $results = $mysqli->query($query);
        $total= $results->num_rows;
        //get correct choice
        $query = "SELECT *FROM `choices`
                WHERE question_number=$number AND is_correct=1";
        //get result
        $result=$mysqli->query($query);
        
        //get row
        $row = $result->fetch_assoc();
        $correct_choice=$row['id'];
        //compare
        if($correct_choice==$selected_choice){
            //answer is correct
            $_SESSION['score']++;
              
        }
        if($number==$total){
        header("Location:final.php");
        exit();
        }
        else
        {
       header("Location:question.php?n=$next");
        }
    
    }