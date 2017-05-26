<html>
<head>
<meta charset="utf-8">
<title>rum</title>
</head>
<body>RUM
	<?php
		for($i=0;$i<10;$i++){
			echo "当页面内有</_title>时，js嵌在</_title>之后";
			flush();
		}
	?>
</body>
</html>