<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Exercise 3 Submitted </title>
        <link rel="stylesheet" href="php_style.css">
    </head>
</html>

<?php
    $username = $_POST["user"];
    $password = $_POST["pass"];
    $bf_num = $_POST["bf_in"];
    $hk_num = $_POST["hk_in"];
    $lbc_num = $_POST["lbc_in"];
    $ship_val = $_POST["shipping"];
    $bf_total = $bf_num*(11.69);
    $hk_total = $hk_num*(9.99);
    $lbc_total = $lbc_num*(13.00);

    echo "<span class='welcome'> Welcome, " . $username . ", thank you for your purchase! </span><br>";
    echo "<span class='welcome'> Your Password is: " . $password . "</span><br>";
    echo "<br><br>";
    echo "<span class='welcome'> Here is your receipt: </span><br><br>";

    echo "<table>";
    echo "<tr> <th class='dif_bg'> </th> <th class='dif_bg'> Quantity </th> <th class='dif_bg'> Cost Per Item </th> <th class='dif_bg'> Sub Total </th> </tr>";
    echo "<tr><td class='dif_bg'> Blue Flag </td><td >" . $bf_num . "</td><td > $11.69 </td><td >$". $bf_total . "</td></tr>";
    echo "<tr><td class='dif_bg'> Haikyu!! </td><td >" . $hk_num . "</td><td > $9.99 </td><td >$". $hk_total . "</td></tr>";
    echo "<tr><td class='dif_bg'> Laid Back Camp </td><td >" . $lbc_num . "</td><td > $13.00 </td><td >$". $lbc_total . "</td></tr>";
    $type_of_ship = '';
    if($ship_val == '0') {
        $type_of_ship = 'Free Shipping';
    }
    else if($ship_val == '5') {
        $type_of_ship = 'Three Day';
    }
    else {
        $type_of_ship = 'Over Night';
    }
    echo "<tr><td class='dif_bg'> Shipping </td><td colspan='2'>" . $type_of_ship .  "</td><td >$". $ship_val . ".00</td></tr>";
    echo "<tr><td class='dif_bg' colspan='3'> Total Cost </td><td class='dif_bg'>$". ($bf_total + $hk_total + $lbc_total + $ship_val) . "</td></tr>";
    echo "</table>";
?>