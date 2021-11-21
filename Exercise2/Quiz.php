<?php
$answer1 = $_POST["q1"];
$answer2 = $_POST["q2"];
$answer3 = $_POST["q3"];
$answer4 = $_POST["q4"];
$answer5 = $_POST["q5"];
$final_grade = 0;
$num_correct;
if($answer1 == "October 1st") {
    $final_grade += 20;
    $num_correct += 1;
}
if($answer2 == "Bookstore") {
    $final_grade += 20;
    $num_correct += 1;
}
if($answer3 == "Nao Tōyama") {
    $final_grade += 20;
    $num_correct += 1;
}
if($answer4 == "Yamaha Vino 125") {
    $final_grade += 20;
    $num_correct += 1;
}
if($answer5 == "450 km") {
    $final_grade += 20;
    $num_correct += 1;
}
echo "<b><br>You answered " . $num_correct . "/5 correct!<br></b>";
echo "<b>Your grade is a " . $final_grade . "%<br><br></b>";
echo "Question 1: When is Rin Shima's birthday?<br><br>";
echo "&emsp;You answered: " . $answer1 . "<br>";
echo "&emsp;Correct answer: October 1st<br>";
echo "<br><br>";
echo "Question 2: Where does Rin Shima work part time?<br><br>";
echo "&emsp;You answered: " . $answer2 . "<br>";
echo "&emsp;Correct answer: Bookstore<br>";
echo "<br><br>";
echo "Question 3: Who is Rin Shima's Japanese voice actor?<br><br>";
echo "&emsp;You answered: " . $answer3 . "<br>";
echo "&emsp;Correct answer: Nao Tōyama<br>";
echo "<br><br>";
echo "Question 4: What real life scooter is Rin's scooter based off of?<br><br>";
echo "&emsp;You answered: " . $answer4 . "<br>";
echo "&emsp;Correct answer: Yamaha Vino 125<br>";
echo "<br><br>";
echo "Question 5: What is Rin's travel record with her scooter?<br><br>";
echo "&emsp;You answered: " . $answer5 . "<br>";
echo "&emsp;Correct answer: 450 km<br>";
echo "<br> <b><u>You can retake the quiz now if you want</u></b> <br><br>";
readfile("Quiz.html");
?>
