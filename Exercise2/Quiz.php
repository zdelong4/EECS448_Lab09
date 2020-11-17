<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<body>
<?php
//access the global array called $_POST to get the values from the text fields
$answer1 = $_POST['1ans'];
$answer2 = $_POST['2ans'];
$answer3 = $_POST['3ans'];
$answer4 = $_POST['4ans'];
$answer5 = $_POST['5ans'];
$score = 0;
if ($answer1 == "2") { 
    $score++; 
}
if ($answer2 == "5") { 
    $score++; 
}
if ($answer3 == "11") { 
    $score++; 
}
if ($answer4 == "19") {
     $score++; 
    }
if ($answer5 == "20") { 
    $score++; 
}
$percent = ($score / 5)*100;
echo "<div id='results'>Question1: What is 1 + 1?</div>";
echo "<div id='results'>You answered: $answer1 </div>";
echo "<div id='results'>Correct Answer: 2 </div><br>";
echo "<div id='results'>Question2: What is 2 + 3?</div>";
echo "<div id='results'>You answered: $answer2 </div>";
echo "<div id='results'>Correct Answer: 5 </div><br>";
echo "<div id='results'>Question3: What is 5 + 6?</div>";
echo "<div id='results'>You answered: $answer3 </div>";
echo "<div id='results'>Correct Answer: 11 </div><br>";
echo "<div id='results'>Question4: What is 9 + 10?</div>";
echo "<div id='results'>You answered: $answer4 </div>";
echo "<div id='results'>Correct Answer: 19 </div><br>";
echo "<div id='results'>Question5: What is 8 + 12?</div>";
echo "<div id='results'>You answered: $answer5 </div>";
echo "<div id='results'>Correct Answer: 20 </div><br>";
echo "<div id='results'>$score / 5 correct $percent%</div>";
?>
 
 </body>
  
 </html>