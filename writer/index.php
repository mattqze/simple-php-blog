<?php
include "../layout/header.php";
$allowlist = array(
    '192.168.50.174', //Replace with your IP.
);
if(!in_array($_SERVER['REMOTE_ADDR'],$allowlist)){
    die('This website cannot be accessed from your location.');
}
?>
<link rel="stylesheet" href="/style/main.css">
<h3 style="text-align:center">Writer</h3>
<center>
<form action="submit.php" method="post">
<b>Title</b><br>
<input type="text" name="title">
<br><br>
<b>Date</b><br>
<input type="text" name="date">
<br><br>
<b>Content</b><br>
<textarea id="content" name="content"></textarea>
<br><br>
<input type="submit">
</form>
</center>