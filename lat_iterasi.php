<?php
$i = 1;
while ($i < 20) {
    echo $i. "<br>";
    $i = $i + 1; //$i++;
}
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

for($i=0; $i<=3; $i++) {
    echo $colors[$i]."<br";
}
?>