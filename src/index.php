<?php
echo "Welcome in phpLiteAdmin docker. \r\n";
echo "<br>";
echo "List of the contetnt of the /db folder.\r\n";
echo "<br>";
if ($handle = opendir('/db')) 
{
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry == "*.db") {
            echo "$entry\r\n";
			echo "<br>";
        }
    }
    closedir($handle);
}
include 'phpliteadmin.php';
?>