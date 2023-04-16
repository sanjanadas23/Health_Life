<?php
session_start();
include ('../Actions/function.php');
if(!isset($_SESSION['bmi-username'])){
    echo "
        <script>
//        alert('Login Before checking')
        window.location='./Partial/login.php'
</script>
    
    ";
}
$dataOfUser = getAllTheUserDetailsFromId();
if($dataOfUser[5]=="0"){
    echo "
        <script>
//        alert('Login Before checking')
        window.location='./Partial/bmi.php'
</script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health life - Health</title>
    <link rel="stylesheet" href="../Assets/style/healthstatus.css">

    <style>

      * {
          box-sizing: border-box;
        }

      body{
        margin:0;
        padding:0;

      }

      .main-heading{
        width:100vw;
        height:15vh;
        display:flex;
        align-items:center;
        /* background-color:red; */
        /* Change the background color to change the nav bar bk color */
      }

      .heading{
        display:flex;
        flex-direction:row;
        align-items:center;
        justify-content:center;
        width:80%;
        height:100%;
      }
      .nav-image{
        width:5rem;
        height:5rem;
        margin-right:3rem;
      }
    </style>

</head>
<body>
    

<!--
    Sample Boiler Code for Implementation


    <div class="question-bar">
    <h2 class="qestion">1) How do you generally feel most of the time</h2>
    <ul>
      <li>
        <input type="radio" name="question1" id="a" class="ansList" value="10">
        <label for="a" class="ansa">Very Happy</label>
      </li>
      <li>
        <input type="radio" name="question1" id="b" class="ansList" value="8">
        <label for="b" class="ansb">Happy</label>
      </li>
      <li>
        <input type="radio" name="question1" id="c" class="ansList" value="6">
        <label for="c" class="ansc">Frightened</label>
      </li>
      <li>
        <input type="radio" name="question1" id="d" class="ansList" value="4">
        <label for="d" class="ansd">Angry</label>
      </li>
    </ul>
  </div>

-->
<!-- heading to the Page -->
<div class="main-heading">
      <div class="heading">
    <img class="nav-image" src="../Assets/images/logo.jpeg" alt="LOGO">
    <h1>Calculate the mental status here</h1>
</div>
</div>


    <!-- Design implemneted , main body-->
<div class="quize">
  <form action="../Actions/healthstatus.php" method="post">
  <div class="question-bar">
    <h2 class="qestion">1) How often do you feel worried or anxious?</h2>
    <ul>
      <li>
        <input type="radio" name="question1" id="a1" class="ansList" value="1" required>
        <label for="a1" class="ansa">Rarely</label>
      </li>
      <li>
        <input type="radio" name="question1" id="b1" class="ansList" value="2">
        <label for="b1" class="ansb">Sometimes</label>
      </li>
      <li>
        <input type="radio" name="question1" id="c1" class="ansList" value="3">
        <label for="c1" class="ansc">Often</label>
      </li>
      <li>
        <input type="radio" name="question1" id="d1" class="ansList" value="4">
        <label for="d1" class="ansd">Always</label>
      </li>
    </ul>
  </div>

<!-- Question 2 -->
  <div class="question-bar">
    <h2 class="qestion">2) How often do you feel sad or hopeless?</h2>
    <ul>
      <li>
        <input type="radio" name="question2" id="a2" class="ansList" value="1">
        <label for="a2" class="ansa">Rarely</label>
      </li>
      <li>
        <input type="radio" name="question2" id="b2" class="ansList" value="2">
        <label for="b2" class="ansb">Sometimes</label>
      </li>
      <li>
        <input type="radio" name="question2" id="c2" class="ansList" value="3">
        <label for="c2" class="ansc">Often</label>
      </li>
      <li>
        <input type="radio" name="question1" id="d2" class="ansList" value="4">
        <label for="d2" class="ansd">Always</label>
      </li> 
    </ul>
  </div>

  <!-- Question 3 -->
  <div class="question-bar">
    <h2 class="qestion">3) Do you have trouble sleeping?</h2>
    <ul>
      <li>
        <input type="radio" name="question3" id="a3" class="ansList" value="1">
        <label for="a3" class="ansa">NO</label>
      </li>
      <li>
        <input type="radio" name="question3" id="b3" class="ansList" value="2">
        <label for="b3" class="ansb">Sometimes</label>
      </li>
      <li>
        <input type="radio" name="question3" id="c3" class="ansList" value="3">
        <label for="c3" class="ansc">Often</label>
      </li>
      <li>
        <input type="radio" name="question3" id="d3" class="ansList" value="4">
        <label for="d3" class="ansd">Always</label>
      </li>
    </ul>
  </div>

  <!-- Question 4 -->
  <div class="question-bar">
    <h2 class="qestion">4) How often do you feel irritable or angry?</h2>
    <ul>
      <li>
        <input type="radio" name="question4" id="a4" class="ansList" value="1">
        <label for="a4" class="ansa">Rarely</label>
      </li>
      <li>
        <input type="radio" name="question4" id="b4" class="ansList" value="2">
        <label for="b4" class="ansb">Sometimes</label>
      </li>
      <li>
        <input type="radio" name="question4" id="c4" class="ansList" value="3">
        <label for="c4" class="ansc">Often</label>
      </li>
      <li>
        <input type="radio" name="question4" id="d4" class="ansList" value="4">
        <label for="d4" class="ansd">Always</label>
      </li>
    </ul>
  </div>

  <!-- Question 5 -->
  <div class="question-bar">
    <h2 class="qestion">5) How often do you experience intrusive thoughts or urges?</h2>
    <ul>
      <li>
        <input type="radio" name="question5" id="a5" class="ansList" value="1">
        <label for="a5" class="ansa">Rarely</label>
      </li>
      <li>
        <input type="radio" name="question5" id="b5" class="ansList" value="2">
        <label for="b5" class="ansb">Sometimes</label>
      </li>
      <li>
        <input type="radio" name="question5" id="c5" class="ansList" value="3">
        <label for="c5" class="ansc">Often</label>
      </li>
      <li>
        <input type="radio" name="question5" id="d5" class="ansList" value="4">
        <label for="d5" class="ansd">Always</label>
      </li>
    </ul>
  </div>

  <!-- Question 6 -->
  <div class="question-bar">
    <h2 class="qestion">6) Do you have a history of substance abuse?</h2>
    <ul>
      <li>
        <input type="radio" name="question6" id="a6" class="ansList" value="1">
        <label for="a6" class="ansa">NO</label>
      </li>
      <li>
        <input type="radio" name="question6" id="b6" class="ansList" value="2">
        <label for="b6" class="ansb">Yes, but it is under control</label>
      </li>
      <li>
        <input type="radio" name="question6" id="c6" class="ansList" value="3">
        <label for="c6" class="ansc">Yes, and it is currently a problem</label>
      </li>
      <!-- <li>
        <input type="radio" name="question6" id="d6" class="ansList" value="4">
        <label for="d6" class="ansd">Always</label>
      </li> -->
    </ul>
  </div>

  <!-- Question 7 -->
  <div class="question-bar">
    <h2 class="qestion">7) Have you experienced any traumatic events in your life?</h2>
    <ul>
      <li>
        <input type="radio" name="question7" id="a7" class="ansList" value="1">
        <label for="a7" class="ansa">NO</label>
      </li>
      <li>
        <input type="radio" name="question7" id="b7" class="ansList" value="2">
        <label for="b7" class="ansb">Yes, but it was not significant</label>
      </li>
      <li>
        <input type="radio" name="question7" id="c7" class="ansList" value="3">
        <label for="c7" class="ansc">Yes, and it has had a significant impact on my life</label>
      </li>
      <!-- <li>
        <input type="radio" name="question7" id="d7" class="ansList" value="4">
        <label for="d7" class="ansd">Angry</label>
      </li> -->
    </ul>
  </div>

  <!-- Question 8 -->
  <div class="question-bar">
    <h2 class="qestion">8) Do you have trouble concentrating or staying focused?</h2>
    <ul>
      <li>
        <input type="radio" name="question8" id="a8" class="ansList" value="1">
        <label for="a8" class="ansa">NO</label>
      </li>
      <li>
        <input type="radio" name="question8" id="b8" class="ansList" value="2">
        <label for="b8" class="ansb">Sometimes</label>
      </li>
      <li>
        <input type="radio" name="question8" id="c8" class="ansList" value="3">
        <label for="c8" class="ansc">Often</label>
      </li>
      <li>
        <input type="radio" name="question8" id="d8" class="ansList" value="4">
        <label for="d8" class="ansd">Always</label>
      </li>
    </ul>
  </div>

  <!-- Question 9 -->
  <div class="question-bar">
    <h2 class="qestion">9) How often do you feel overwhelmed or stressed?</h2>
    <ul>
      <li>
        <input type="radio" name="question9" id="a9" class="ansList" value="1">
        <label for="a9" class="ansa">Rarely</label>
      </li>
      <li>
        <input type="radio" name="question9" id="b9" class="ansList" value="2">
        <label for="b9" class="ansb">Sometimes</label>
      </li>
      <li>
        <input type="radio" name="question9" id="c9" class="ansList" value="3">
        <label for="c9" class="ansc">Often</label>
      </li>
      <li>
        <input type="radio" name="question9" id="d9" class="ansList" value="4">
        <label for="d9" class="ansd">Always</label>
      </li>
    </ul>
  </div>

  <!-- Question 10 -->
  <div class="question-bar">
    <h2 class="qestion">10) Have you ever had thoughts of self-harm or suicide?</h2>
    <ul>
      <li>
        <input type="radio" name="question10" id="a10" class="ansList" value="1">
        <label for="a10" class="ansa">NO</label>
      </li>
      <li>
        <input type="radio" name="question10" id="b10" class="ansList" value="2">
        <label for="b10" class="ansb">Yes, but it was in the past</label>
      </li>
      <li>
        <input type="radio" name="question10" id="c10" class="ansList" value="3">
        <label for="c10" class="ansc">Yes, and it is currently a concern</label>
      </li>
      <!-- <li>
        <input type="radio" name="question10" id="d10" class="ansList" value="4">
        <label for="d10" class="ansd">Angry</label>
      </li> -->
    </ul>
  </div>

  <!-- Submit Button -->
  <div class="footer-button">
      <button id="submit" class="submitBtn">Submit</button>
    </div>
    
    
  </form>
</div>

    <!-- Design Finished -->
</body>
</html>