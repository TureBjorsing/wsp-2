<?php

for($i = 1.0; $i < 5.0; $i = $i + 0.1) {
    echo $i . " ";
}

echo "<br>";

$i = 1;
while($i < 5) {
    echo $i . " ";
    $i += 0.1;
}

?>