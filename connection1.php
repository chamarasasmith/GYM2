<?php
$sname = 'localhost';
$un = 'root';
$pw = 'zenonideas';
$dbname = 'gym2';

$con = new mysqli($sname, $un, $pw, $dbname);

if ($con->connect_error) {
    die('fail ' . $con->connect_error);
}
?>