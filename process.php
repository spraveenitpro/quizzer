<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //Check if the Score is set_error_handler

    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }

    if($_POST){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];


        $next = $number+1;
        /*
         * Get Total questions
         */
        $query = "select * from `questions`";
        //Get Results
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;

        /*
         * Get Correct Choice
         */

        $query = "select * from choices where question_number= $number and is_correct= 1";
        //Get Result

        $result = $mysqli->query($query) or die ($mysqli->error.__LINE__);

        //Get Row
        $row = $result->fetch_assoc();

        //Set correct choice
        $correct_choice = $row['id'];

        //Compare

        if ($correct_choice == $selected_choice){
            //Answer is correct
            $_SESSION['score']++;
        }

        //Check if its the last question
        if($number == $total){
            header("Location: final.php");
            exit();
        } else {
            header("Location: question.php?n=".$next);
        }

    }
