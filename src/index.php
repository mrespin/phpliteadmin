<?php
#echo "Welcome in phpLiteAdmin docker. V0.2 ";
echo "/db contetnts: ";
#echo "<br>";
foreach (glob("/db/*.db") as $filename) {
    echo "$filename size " . filesize($filename) . "\n";
    #echo "<br>";
}
include 'phpliteadmin.php';
?>