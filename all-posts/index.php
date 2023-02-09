<?php
include "../layout/header.php";
?>
<link rel="stylesheet" href="/style/main.css">
<h3 style="text-align:center">Oldest > Newest</h3>
<?php
$files = glob('../post/*.{txt}', GLOB_BRACE);
foreach($files as $file) {
    $newest_post = "../post/" . $file;
    $titleline = fgets(fopen($newest_post, 'r'));
    $lines = file($newest_post, FILE_IGNORE_NEW_LINES);
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
