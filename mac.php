<html>
<head>
</head>
<body>
<H1> Заказ McDonalds </H1>
<table border=2>
<tr> <td>McDonalds</td> <td>kilkist</td> <td>result</td> </tr>
<?php
$fp=fopen("k.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
       list($McDonalds,$kilkist,$result)=$stroka;
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$McDonalds/td><td>$kilkist</td> <td>$result</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>
