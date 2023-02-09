<?php
include "layout/header.php";
?>
<link rel="stylesheet" href="/style/main.css">
<?php
$files = scandir('post', SCANDIR_SORT_DESCENDING);
$newest_post = $files[0];
$newest_post = "post/" . $newest_post;
$titleline = fgets(fopen($newest_post, 'r'));
$lines = file($newest_post);
$undofirst = array_slice($lines, 2); 
$blog_text = implode("\r\n", $undofirst);
?>
<center>
<div class="blog">
<h2><?php echo $titleline; ?></h2>
<b><?php echo $lines[1]; ?></b>
<h3><?php echo $blog_text; ?></h3>
</div>
<a href="/all-posts/">View Older</a><br><br>
<a style="position:absolute; bottom:5; left:2;" href=/writer/>Add New</a>
</center>