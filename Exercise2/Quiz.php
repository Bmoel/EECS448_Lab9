<?php
$answer1 = $_POST["q1"];
$answer2 = $_POST["q2"];
$answer3 = $_POST["q3"];
$answer4 = $_POST["q4"];
$answer5 = $_POST["q5"];
$final_grade = 0;
if($answer1 == "October 1st") {
    $final_grade += 20;
}
if($answer2 == "Bookstore") {
    $final_grade += 20;
}
if($answer3 == "Nao Tōyama") {
    $final_grade += 20;
}
if($answer4 == "Yamaha Vino 125") {
    $final_grade += 20;
}
if($answer5 == "450 km") {
    $final_grade += 20;
}
echo $final_grade;
?>
