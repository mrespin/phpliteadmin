<?php
echo "Welcome in phpLiteAdmin docker. V0.1B ";
echo "List of the contetnts of the /db folder.\r\n";
echo "<br>";
foreach (glob("/db/*.db") as $filename) {
    echo "$filename size " . filesize($filename) . "\n";
    echo "<br>";
}
include 'phpliteadmin.php';
?>