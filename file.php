
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search by number</title>
</head>

<body>

<?php
$file = fopen("patients.txt","r") or die("unable to open ".$file);
$num=$_POST['num'];
/* row count 
$x=0;
while(!feof($file)){
$str=fgets($file);
$x++;
}
echo $x;*/


while(!feof($file))
  {
   $i=5;
  	$str=fgets($file);
  	$arr=explode(',',$str);
	if($arr[0]==$num){
	echo $arr[0]." | ".$arr[1]." | ".$arr[2]." | ".$arr[3]." | ".$arr[4]." | ".$arr[5]." | ".$arr[6]."<br />";
	break ;
	}
	else if ($num>$i){
	echo "invalid";
	break ;
	}
	else if ($num==""){
	echo "empty";
	break;
	}
}
  fclose($file);
  
  
?> 
</body>
</html>
