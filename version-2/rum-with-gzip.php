<?php
if(Extension_Loaded('zlib')) Ob_Start('ob_gzhandler'); 
?> 
<html> 
<head> <title>GZIP</title> 
</head> 
<body> 
<?php
if(Extension_Loaded('zlib')){
 echo "RUM with gzip";
} else{
 echo "RUM without gzip";
}
?>
</body> 
</html> 