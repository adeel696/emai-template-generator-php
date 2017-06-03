<?php

$localcss =  file_get_contents("css/test.css");
$myfile = fopen("TestTemp.php", "w") or die("Unable to open file!");
$dataInput = "<style>".$localcss."</style>".$_REQUEST["id"];
fwrite($myfile, $dataInput);
fclose($myfile);

?> 