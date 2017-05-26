<?php
function callback1($buffer)
{
  return (str_replace("RUM", "RUM+callback1", $buffer));
}
function callback2($buffer)
{
  return (str_replace("RUM", "RUM+callback2", $buffer));  
}
ob_start("callback1");
ob_start("callback2");
?> 
<html>
<head>
<meta charset="utf-8">
<title>rum</title>
</head>
<body>RUM</body> 
</html>  
<?php 
while (@ob_end_flush());
?>