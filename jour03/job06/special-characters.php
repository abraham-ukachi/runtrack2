<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-cp1252"><!-- Your HTML file can still use UTF-8-->
        <title>Untitled Document</title>
    </head>
    <body>
        <p>
<?php
header('Content-Type: text/html; charset=UTF-CP1252');
$str = "àè";
echo $str[2];
  echo substr($str, 0, 3); ?>
        </p>
    </body>
</html>
