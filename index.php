<?php
include "layout/header.php";
?>
<link rel="stylesheet" href="/style/main.css">
<?php 
$files = preg_grep('/^(?!tmp|(?!([^.]))).*/', scandir('post', SCANDIR_SORT_DESCENDING));
foreach ($files as $file)
{
    $newest_post = "post/" . $file;
    $titleline = fgets(fopen($newest_post, 'r'));
    $lines = file($newest_post);
    $undofirst = array_slice($lines, 2); 
    $blog_text = implode("\r\n", $undofirst);
    echo("<center>
         <div class='blog'>
         <h2>".$titleline."</h2>
         <b>".$lines[1]."</b>
         <h3>".$blog_text."</h3>
         </div>
         </center>
         <br>");
}
?>
<a style="position:fixed; bottom:5; left:5px;" href="/writer/"><b>New Post</b></a> <b style="position:fixed; bottom:5; right:5px; text-decoration:underline; float:right; cursor:pointer;" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">To Top</b></a>
