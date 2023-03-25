<html>
<head>
<style>

.test {
    width:80%; 
	height:50%;
    border: 1px solid #000000;
    word-wrap: break-word;
}
</style>
</head>

<body>
<?php include "nav.php"?>
<div style="margin-left:25%;margin-top:-100%;padding:1px 16px;height:1000px;">
<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<br /><br />
Search by Number : <input name="num" type="text" /> <br /><br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="Submit " type="submit" value="SEARCH" />
</form>

<div class="test">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$file = fopen("patients.txt","r") or die("unable to open ".$file);
$num=$_REQUEST['num'];
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
  
}  
?> 
</div>
</div>
</body>
</html>
