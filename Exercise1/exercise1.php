<?php
function multiply($x,$y) {
  $z = $x * $y;
  return $z;
}


echo "<table>";
for ($i = 0; $i <= 100; $i++) {
  echo "<tr>";
  for($j = 0; $j <= 100; $j++) {
    if($i == 0) {
      if($j == 0) {
        echo "<td></td>";
      } else {
        echo "<td>" . ($j) . "</td>";
      }
    }
    else if ($j == 0) {
      echo "<td>" . ($i) . "</td>";
    }
    else {
      echo "<td>" . multiply($i,$j) . "</td>";
    }
  }
  echo "</tr>";
}
echo "</table>";

?>
