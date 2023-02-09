<?php
include "../layout/header.php";
if(!in_array($_SERVER['REMOTE_ADDR'],$iplist)){
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
<textarea id="content" name="content"></textarea><br><br><b>Preview</b><br><iframe id="previewframe"></iframe>
<br><br>
<a target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Cheatsheet#inline_elements">Cheat Sheet</a><br><br>
<a onclick="preview()">Preview</a><br><br>
<input type="submit">
</form>
</center>
<script>
    function preview(){
        var frame = document.getElementById('previewframe');
        frame.style.background = "#fffff";
        var content = document.getElementById('content');
        frame.onload = function() {
        frame.contentDocument.body.style.fontFamily = "sans-serif";
        frame.contentDocument.body.style.color = "white";
        frame.contentDocument.body.style.fontSize = "20px";
        }

        frame.srcdoc = content.value;
    }
</script>