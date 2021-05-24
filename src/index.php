<?php
echo "List of the contetnt of the local . folder.\r\n"
echo "<br>";
if ($handle = opendir('.')) 
{
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry\r\n";
			echo "<br>";
        }
    }
    closedir($handle);
}
echo "List of the contetnt of the /db folder.\r\n"
echo "<br>";
if ($handle = opendir('/db')) 
{
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry\r\n";
			echo "<br>";
        }
    }
    closedir($handle);
}
include 'phpliteadmin.php';
?>