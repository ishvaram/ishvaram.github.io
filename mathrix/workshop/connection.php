<?php
$mysql_hostname = "localhost";
$mysql_user = "mathrix_root";
$mysql_password = "ram_malar93";
$mysql_database = "mathrix_mathrrix";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>