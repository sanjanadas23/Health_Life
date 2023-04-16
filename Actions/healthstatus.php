<?php

session_start();
include ('function.php');

// CHECKING IF USERNAME NOT EXISTS
if(!isset($_SESSION['bmi-username'])){
    echo "
        <script>
        alert('Login Before checking')
        window.location='../Partial/login.php'
        </script>    
    ";
}
// Calculate the Score here
$question1Score = $_POST['question1'];
$question2Score = $_POST['question2'];
$question3Score = $_POST['question3'];
$question4Score = $_POST['question4'];
$question5Score = $_POST['question5'];
$question6Score = $_POST['question6'];
$question7Score = $_POST['question7'];
$question8Score = $_POST['question8'];
$question9Score = $_POST['question9'];
$question10Score = $_POST['question10'];


/*
    Implement any algorithm here to calculate the state of the person

    After adding the new Questions : 

    Scores of 10 or below: Suggests low levels of mental health concerns
    Scores between 11-20: Suggests mild to moderate levels of mental health concerns
    Scores between 21-30: Suggests moderate to high levels of mental health concerns
    Scores of 31 or above: Suggests high levels of mental health concerns and may indicate the need for immediate professional help
*/

$totalScore = $question1Score + $question2Score + $question3Score + $question4Score + $question5Score + $question6Score + $question7Score + $question8Score + $question9Score + $question10Score;
if($totalScore >= 31){
    // High concerns
    
    echo "
        <script>
        alert('HIGH CONCERNS, we suggest to visit doctor immediately.')
        window.location='../Partial/bookapointment.php'
        </script>    
    ";
}else if($totalScore >= 21){
    // Moderate concerns 
    
    echo "
        <script>
        alert('MODERATE CONCERNS, we suggest to book an appointment')
        window.location='../Partial/bookapointment.php'
        </script>    
    ";
}else if($totalScore >= 11){
    // mild concerns
    
    echo "
        <script>
        alert('MILD CONCERNS, we suggest to take a break')
        window.location='../'
        </script>    
    ";
}else{
    // Low concerns
   
    echo "
        <script>
        alert('LOW CONCERNS, we suggest to enjoy the life.')
        window.location='../'
        </script>    
    ";
}


