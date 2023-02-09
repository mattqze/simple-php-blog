<?php
$files = scandir('../post', SCANDIR_SORT_DESCENDING);
$previous = $files[0];
$previous = substr($previous, 0, -4);
$filename = (int)$previous;
$filename = ++$previous;
$filename = (string) $filename . ".txt";
$filename = "../post/" . $filename;
$blogfile = fopen($filename, "w");
file_put_contents($filename, $_POST['title'] ."\r\n". $_POST['date'] ."\r\n". $_POST['content']);
header("Location: /")
?>