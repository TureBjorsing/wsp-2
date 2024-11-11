<?php
header('Content-Type: text/html; charset=utf-8');

$page["head"] = "<h1>Välkommen</h1>";
$page["main"] = "<p>Detta är innehållet på min sida</p>";
$page["footer"] = "<hr><p>Min sidfoot</p>";

foreach($page as $value) {
    echo $value;
}

?>