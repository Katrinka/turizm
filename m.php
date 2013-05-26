<?php
$McDonalds=$_REQUEST['McDonalds'];
echo "McDonalds=$McDonalds <br>"; 
$kilkist=$_REQUEST['kilkist'];
echo "kilkist=$kilkist <br>"; 
$result=$_REQUEST['result'];
echo "result=$result <br>"; 
$fp=fopen("k.txt","a");
fputs($fp,"$McDonalds\t$kilkist\t$result\t");
fclose($fp);
?>
