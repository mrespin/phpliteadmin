<?php
echo "Welcome in phpLiteAdmin docker. ";
echo "List of the contetnt of the /db folder.\r\n";
echo "<br>";
foreach (glob("/db/*.db") as $filename) {
    echo "$filename size " . filesize($filename) . "\n";
    echo "<br>";
}
include 'phpliteadmin.php';
?>